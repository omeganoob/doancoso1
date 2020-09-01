var data = [
    [
        "Nguyen Quang Chung",
        "012346578",
        "nqchung@gmail.com"
    ],
    [
        "Tran Ngoc Quang",
        "012346578",
        "tnquang@gmail.com"
    ],
    [
        "Nguyen Van An",
        "012315640",
        "AAAn@gmail.com"
    ],
    [
        "Nguyen Tat Trung",
        "012154542",
        "nttrung@gmai.com"
    ],
    [
        "tran thanh phong",
        "022315456",
        "phonghopro@gmai.com"
    ]
]

$(document).ready(function() {
    $('#userTable').DataTable( {
        data: data,
        "lengthMenu": [ [3, 5, 10, 15, -1], [3, 5, 10, 15, "All"] ]
    } );
});