var data = [
    [   1,
        "zfmp1",
        "Asus Zenfone MAX Pro M1",
        5900000,
        249
    ],
    [   2,
        "zfmp2",
        "Asus Zenfone MAX Pro M2",
        6900000,
        231
    ],
    [
        3,
        "opoa520",
        "Oppo A5 2020",
        4490000,
        214
    ],
    [
        4,
        "rme2p",
        "Realme 2 Pro",
        12000000,
        157
    ],
    [
        5,
        "ip11p",
        "Iphone 11 Pro",
        12000000,
        58
    ],
    [
        6,
        "sgn10p",
        "Samsung Galaxy Note 10 Plus",
        14000000,
        56
    ],
    [
        7,
        "mixarn9",
        "Xiaomi Redmi Note 9",
        9000000,
        135
    ],
    [
        8,
        "opoa920",
        "Oppo A9 2020",
        8990000,
        189
    ],[
        9,
        "bpb86",
        "Bphone B86",
        12000000,
        66
    ],[
        10,
        "hwn3i",
        "Huawei Nova 3i",
        7000000,
        210
    ]
]

$(document).ready(function() {
    $('#stockTable').DataTable( {
        data: data,
        "lengthMenu": [ [10, 15, 20, 30, -1], [10, 15, 20, 30, "All"] ],
    } );
});