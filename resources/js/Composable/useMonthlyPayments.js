import { computed, isRef } from 'vue'

// isref ternary untuk melakukan pengecekan apakah parameter tersebut termasuk dalam raktif atau variabel biasa
export const useMonthlyPayments = (total, interestRate, duration) => {
    const monthlyPayment = computed(() => {
        const principle = isRef(total) ? total.value : total //harga dari listingnya
        const monthlyInterest = (isRef(interestRate) ? interestRate.value : interestRate) / 100 / 12 //bunga berdasarkan hargasetiap bulan
        const numberOfPaymentMonths = (isRef(duration) ? duration.value : duration) * 12 //harga yg harus di bayar setiap bulan

        // perhitungan harga berdasarkan biaya tahunan beserta bunganya

        return principle * monthlyInterest * (Math.pow(1 + monthlyInterest, numberOfPaymentMonths)) / (Math.pow(1 + monthlyInterest, numberOfPaymentMonths) - 1)
    })

    const totalPaid = computed(() => {
        return (isRef(duration) ? duration.value : duration) * 12 * monthlyPayment.value
    })


    const totalInterest = computed(() => totalPaid.value - (isRef(total) ? total.value : total))

    return { monthlyPayment, totalPaid, totalInterest }
}