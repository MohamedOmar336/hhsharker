document.addEventListener('DOMContentLoaded', function () {
    // General Product Tab Navigation
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

    // Home Page Product Tab Navigation
    document.getElementById('step6Next').addEventListener('click', function () {
        switchTab('home-page-nav-tab', 'step6', 'step7');
    });

    document.getElementById('step7Prev').addEventListener('click', function () {
        switchTab('home-page-nav-tab', 'step7', 'step6');
    });

    document.getElementById('step7Next').addEventListener('click', function () {
        switchTab('home-page-nav-tab', 'step7', 'step8');
    });

    document.getElementById('step8Prev').addEventListener('click', function () {
        switchTab('home-page-nav-tab', 'step8', 'step7');
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
