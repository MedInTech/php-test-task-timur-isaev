var editor;

function getRecord(e, action) {
    el = e.srcElement || e.target;
    if (el.tagName != "TD")
        return;
    if (el.parentNode.getAttribute("idRecord") != null) {
        var newLocation = action + "=" + el.parentNode.getAttribute("idRecord");
        window.location = newLocation;
    }
}

$(document).ready(function() {
   $(".nav li.disabled a").click(function() {
     return false;
   });
});

$(document).ready(function() {
    $("#tableListURL").DataTable( {
        language: {
            "processing": "Подождите...",
            "search": "Поиск:",
            "lengthMenu": "Показать _MENU_ записей",
            "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
            "infoEmpty": "Записи с 0 до 0 из 0 записей",
            "infoFiltered": "(отфильтровано из _MAX_ записей)",
            "infoPostFix": "",
            "loadingRecords": "Загрузка записей...",
            "zeroRecords": "Записи отсутствуют.",
            "emptyTable": "В таблице отсутствуют данные",
            "paginate": {
              "first": "Первая",
              "previous": "Предыдущая",
              "next": "Следующая",
              "last": "Последняя"
            },
            "aria": {
              "sortAscending": ": активировать для сортировки столбца по возрастанию",
              "sortDescending": ": активировать для сортировки столбца по убыванию"
            }
        },
        order: [[ 2, 'asc' ]]
    });     
} );

