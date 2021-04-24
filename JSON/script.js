// let mahasiswa = {
//     nama : "feri irawan",
//     nim : "8912989812",
//     email : "fery@gmail.com"
// }
// console.log(JSON.stringify(mahasiswa));


// vanila js 
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if(xhr.readyState == 4 && xhr.status == 200){
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }
// xhr.open('GET', 'coba.json', true);
// xhr.send()


// jquery menggunakan 
$.getJSON('coba.json', function (data) {
    console.log(data);
});






















