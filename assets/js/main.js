totalProcessor = 0;
totalSystem = 0;
totalGPU = 0;
totalCooling = 0;
endTotal = 0;

// CPU select data
const cpuBrand = {"amd": "AMD", "intel": "Intel"}


const totalValue = document.querySelector('total_value');
const selectItems = document.querySelectorAll('.form-select');

selectItems.forEach(function (selectItem) {
    selectItem.addEventListener('click', function (item) {
        console.log(item);
    })
})