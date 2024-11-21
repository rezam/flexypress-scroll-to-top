document.addEventListener('DOMContentLoaded', () => {
    const scrollWrap = document.querySelector('.flexypress-scroll-to-top-wrap');

    if (scrollWrap) {
        const radioButtons = document.querySelectorAll('input[name="fp_scroll_type"]');

        const updateDisplay = () => {
            const isChecked = document.querySelector('input[name="fp_scroll_type"]:checked').value === 'icon';
            document.querySelector('.option-group-text').style.display = isChecked ? 'none' : 'flex';
            document.querySelector('.option-group-svg').style.display = isChecked ? 'flex' : 'none';
            document.querySelector('.option-group-color').style.display = isChecked ? 'none' : 'flex';
        };

        updateDisplay();

        radioButtons.forEach(radio => radio.addEventListener('change', updateDisplay));
    }
});