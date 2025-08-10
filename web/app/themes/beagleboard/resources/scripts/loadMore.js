function loadMore()
{
//console.clear();
//  var work = document.querySelector('#workOuterShell');
    let items = Array.from(document.querySelectorAll('.item-load'));
    let loadMore = document.getElementById('loadMore');
    let maxItems = 4;
    let loadItems = 4;
    let hiddenClass = 'hiddenStyle';
//const hiddenItems = Array.from(document.querySelectorAll('.hiddenStyle'));

    items.forEach(function (item, index) {
        console.log(item.innerText, index);
        if (index > maxItems - 1) {
            item.classList.add(hiddenClass);
        }
    });

    loadMore.addEventListener('click', function () {
        [].forEach.call(document.querySelectorAll('.' + hiddenClass), function (
            item,
            index
        ) {
            if (index < loadItems) {
                item.classList.remove(hiddenClass);
            }

            if (document.querySelectorAll('.' + hiddenClass).length === 0) {
                loadMore.style.display = 'none';
            }
        });
    });

}

export {loadMore as default};
