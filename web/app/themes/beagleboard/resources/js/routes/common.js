export default {
    init() {

        function searchToggle()
        {
            const searchButton = document.querySelector('#search');
            const searchBox = document.querySelector('#search_box');

            searchButton.addEventListener('click', function (event) {
                searchBox.classList.toggle('active');
                searchBox. input.toggleAttribute("aria-hidden");
                event.preventDefault();
            });

            window.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    searchBox.classList.remove('active');
                }
            })
        }

        searchToggle();
    },
};


