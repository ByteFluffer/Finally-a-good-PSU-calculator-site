let totalAmount = 0;
const totalValue = document.getElementById('total_value')
//
// Processor
//



//
// System
//

// Ram 
systemRam = {3: '1x 8GB', 6: '2x 8GB', 12: '4x 8GB'};
systemStorage = {7.5: '1x SSD storage', 15: '2x SSD storage'};
systemFans = {2.3: '1 FAN', 4.6: '2 FANS', 9.2: '4 FANS'};
systemHdd = {6: '1 HDD', 12: '2 HDDs'};

/// 
// GPU
// 
const gpuBrand = {'nvidia': 'Nvidia', 'amd': 'AMD', 'intel': 'Intel'};

const gpuSeriesNvidia = {'gtx': 'GTX', 'rtx': 'RTX'};
const gpuSeriesAMD = {'rx': 'RX'};
const gpuSeriesIntel = {'arc': 'ARC'};

const gpuModelNvidiaGtx = {75: '1050TI'};
const gpuModelNvidiaRtx = {200: '3060TI'};

const gpuModelAmdRx = {120: 'RX6600', 176: 'RX6650XT'};

const gpuModelIntelArc = {};





//
// Cooling
// 
const coolingTypes = {'air': 'Air cooler', 'aio': 'AIO'};
const airCooling = {5: '1x 120mm', 10: '2x 120mm', 5: '1x 140mm', 10: '2x 140mm'}
const aioCooling = {5: '120mm', 10: '240mm', 15: '360mm', 20: '480mm'}





//
// Logic
//

// System

const systemRamSelect= document.getElementById('select_system_ram');
const systemSsdSelect = document.getElementById('select_system_ssd');
const systemFanSelect = document.getElementById('select_system_fans')
const systemHddSelect = document.getElementById('select_system_hdd')

systemRamSelect.addEventListener('change', function () {
    console.log(this.value);
    // Update select options
    update_options(selectItem='select_gpu_brand', optionType=gpuBrand);

});



// GPU
const gpuBrandSelect= document.getElementById('select_gpu_brand');
const gpuSeriesSelect = document.getElementById('select_gpu_series');
const gpuModelSelect = document.getElementById('select_gpu_model')

gpuBrandSelect.addEventListener('change', function () {
    console.log(this.value);
    if (this.value == 'nvidia') {
        remove_options(selectItem='select_gpu_series', optionType=gpuSeriesAMD);
        remove_options(selectItem='select_gpu_series', optionType=gpuSeriesIntel);
        update_options(selectItem='select_gpu_series', optionType=gpuSeriesNvidia);
    } 
    if (this.value == 'amd') {
        remove_options(selectItem='select_gpu_series', optionType=gpuSeriesNvidia);
        remove_options(selectItem='select_gpu_series', optionType=gpuSeriesIntel);
        update_options(selectItem='select_gpu_series', optionType=gpuSeriesAMD);
    }
    if (this.value == 'intel') {
        remove_options(selectItem='select_gpu_series', optionType=gpuSeriesNvidia);
        remove_options(selectItem='select_gpu_series', optionType=gpuSeriesAMD);
        update_options(selectItem='select_gpu_series', optionType=gpuSeriesIntel);
    }
});

gpuSeriesSelect.addEventListener('change', function () {
    if (this.value == 'gtx') {
        remove_options(selectItem='select_gpu_model', optionType=gpuModelNvidiaRtx);                
        remove_options(selectItem='select_gpu_model', optionType=gpuModelAmdRx);
        remove_options(selectItem='select_gpu_model', optionType=gpuModelIntelArc);
        update_options(selectItem='select_gpu_model', optionType=gpuModelNvidiaGtx);
    } 
    if (this.value == 'rtx') {
        remove_options(selectItem='select_gpu_model', optionType=gpuModelAmdRx);
        remove_options(selectItem='select_gpu_model', optionType=gpuModelIntelArc);
        remove_options(selectItem='select_gpu_model', optionType=gpuModelNvidiaGtx);
        update_options(selectItem='select_gpu_model', optionType=gpuModelNvidiaRtx);
    }
    if (this.value == 'rx') {
        remove_options(selectItem='select_gpu_model', optionType=gpuModelIntelArc);
        remove_options(selectItem='select_gpu_model', optionType=gpuModelNvidiaGtx);
        remove_options(selectItem='select_gpu_model', optionType=gpuModelNvidiaRtx);
        update_options(selectItem='select_gpu_model', optionType=gpuModelAmdRx);
    }
    if (this.value == 'arc') {
        remove_options(selectItem='select_gpu_model', optionType=gpuModelNvidiaGtx);
        remove_options(selectItem='select_gpu_model', optionType=gpuModelNvidiaRtx);
        remove_options(selectItem='select_gpu_model', optionType=gpuModelAmdRx);
        update_options(selectItem='select_gpu_model', optionType=gpuModelIntelArc);
    }        

    // Update select options
    update_options(selectItem='select_cooling_type', optionType=coolingTypes);

});




// Cooling

const coolingTypeSelect = document.getElementById('select_cooling_type');
const coolingFormFactorselect = document.getElementById('select_cooling_formfactor');

coolingTypeSelect.addEventListener('change', function () {
    if (this.value == 'air') {
        remove_options(selectItem='select_cooling_formfactor', optionType=aioCooling)
        update_options(selectItem='select_cooling_formfactor', optionType=airCooling)
    } 
    if (this.value == 'aio') {
        remove_options(selectItem='select_cooling_formfactor', optionType=airCooling)
        update_options(selectItem='select_cooling_formfactor', optionType=aioCooling)
    }
});



// Update options
function update_options(selectItem, optionType) {
    for (const [key, value] of Object.entries(optionType)) {
        console.log(key, value);
        var option = document.createElement('option');
        option.text = value, option.value = key;
        document.getElementById(selectItem).add(option);
    }
}

// Remove options
function remove_options(selectItem, optionType) {
    for (const [key, value] of Object.entries(optionType)) {
        var option = document.createElement('option');
        option.text = value, option.value = key;
        document.getElementById(selectItem).remove(option);
    }
}