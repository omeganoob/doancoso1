var data = [
    [
        1,
        "zfmp1",
        "Asus Zenfone MAX Pro M1",
        5900000,
        11
    ],
    [
        2,
        "opoa520",
        "Oppo A5 2020",
        4490000,
        8
    ],
    [
        3,
        "zfmp2",
        "Asus Zenfone MAX Pro M2",
        6900000,
        6
    ],
    [
        4,
        "ip11p",
        "Iphone 11 Pro",
        12000000,
        4
    ],
    [
        5,
        "opoa920",
        "Oppo A9 2020",
        5500000,
        4
    ],
    [
        6,
        "rme2p",
        "Realme 2 Pro",
        12000000,
        3
    ],
    [
        7,
        "sgn10p",
        "Samsung Galaxy Note 10 Plus",
        17000000,
        2
    ],
    [
        8,
        "bpb86",
        "Bphone B86",
        12000000,
        1
    ],
    [
        9,
        "mixaorn9",
        "Xiaomi Redmi Note 9",
        9900000,
        1
    ]
]

$(document).ready(function() {
    $('#soldTable').DataTable( {
        data: data,
        "lengthMenu": [ [10, 20, 30, 50, -1], [10, 20, 30, 50, "All"] ]
    } );
});