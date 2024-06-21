document.addEventListener("DOMContentLoaded", function() {
    const toastList = document.querySelectorAll("[toast-list]");
    const dataChoices = document.querySelectorAll("[data-choices]");
    const dataProvider = document.querySelectorAll("[data-provider]");

    if (toastList.length || dataChoices.length || dataProvider.length) {
        const script1 = document.createElement('script');
        script1.src = 'https://cdn.jsdelivr.net/npm/toastify-js';
        document.body.appendChild(script1);

        const script2 = document.createElement('script');
        script2.src = 'https://cdn.jsdelivr.net/npm/choices@0.1.3/choices.min.js';
        document.body.appendChild(script2);

        const script3 = document.createElement('script');
        script3.src = 'https://cdn.jsdelivr.net/npm/flatpickr';
        document.body.appendChild(script3);
    }
});
