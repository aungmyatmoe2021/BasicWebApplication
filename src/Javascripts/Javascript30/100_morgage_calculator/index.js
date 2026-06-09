const housePriceElement = document.getElementById("housePrice");
const downPaymentElement = document.getElementById("downPayment");
const annaulInterestRateElement = document.getElementById("annaulInterestRate");
const planOfYearElement = document.getElementById("planOfYear");
const monthlypaymentElement = document.getElementById("monthlypayment");
housePriceElement.addEventListener("keyup",calculateMortgage);
downPaymentElement.addEventListener("keyup",calculateMortgage);
annaulInterestRateElement.addEventListener("keyup",calculateMortgage);
planOfYearElement.addEventListener("keyup",calculateMortgage);

function loanAmount(){
    calculateMortgage(housePriceElement.value-downPaymentElement.value)
    return housePriceElement.value-downPaymentElement.value;
}

function calculateMortgage(){
    // loanAmount, annualRate, years
    let housePrice = housePriceElement.value ?? 0;
    let downPayment = downPaymentElement.value ?? 0;
    let annualRate = annaulInterestRateElement.value ?? 0;
    let years = planOfYearElement.value ?? 0;
    let monthlypayment = 0;
    let loanAmount = housePrice-downPayment;
    const monthlyRate = (annualRate / 12) / 100;
    const totalMonths = years * 12;

    if (monthlyRate === 0) return (loanAmount / totalMonths).toFixed(2);

    const monthlyPayment = (loanAmount * monthlyRate * Math.pow(1 + monthlyRate, totalMonths)) / (Math.pow(1 + monthlyRate, totalMonths) - 1);
    
    monthlypaymentElement.value = monthlyPayment == "Infinity" ? "0": monthlyPayment.toFixed(2);
}