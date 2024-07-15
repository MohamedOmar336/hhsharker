document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('step1Next').addEventListener('click', function () {
        switchTab('product-nav-tab', 'step1', 'step2');
    });

    document.getElementById('step2Prev').addEventListener('click', function () {
        switchTab('product-nav-tab', 'step2', 'step1');
    });

    document.getElementById('step2Next').addEventListener('click', function () {
        switchTab('product-nav-tab', 'step2', 'step3');
    });

    document.getElementById('step3Prev').addEventListener('click', function () {
        switchTab('product-nav-tab', 'step3', 'step2');
    });


    function switchTab(navId, fromTabId, toTabId) {
        const navTabs = document.getElementById(navId).querySelectorAll('.nav-link');
        const tabContents = document.getElementById(navId + 'Content').querySelectorAll('.tab-pane');
        
        navTabs.forEach(tab => {
            tab.classList.remove('active');
        });
        tabContents.forEach(content => {
            content.classList.remove('active');
        });

        document.getElementById(toTabId).classList.add('active');
        document.querySelector(`a[href="#${toTabId}"]`).classList.add('active');
    }
});
