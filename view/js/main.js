
let add_cart = document.getElementsByClassName('addcart');
let number_cart = document.querySelector('#number_cart');
let src_img = document.getElementsByClassName('src_img');
let name_product = document.getElementsByClassName('name_product');
let id_product = document.getElementsByClassName('id_product');
let price = document.getElementsByClassName('price')

let showCart = document.getElementById('showgiohang')


let cart =  JSON.parse(localStorage.getItem('cart'));
if(cart != null){
    arrCart = cart
    number_cart.innerHTML = arrCart.length
}else{
    var arrCart = [];
}
for (let i = 0; i < add_cart.length; i++) {
    add_cart[i].addEventListener('click', function () {
        let img = src_img[i].getAttribute('src');
        let tensp = name_product[i].innerText;
        let gia = price[i].innerText;
        let id = id_product[i].value;
        let sl = 1;
        let sp = {
            'id':id,
            'tensp': tensp,
            'img': img,
            'gia': gia,
            'sl':sl
        }
        arrCart.push(sp)
        localStorage.setItem('cart',JSON.stringify(arrCart));
        let cart =  JSON.parse(localStorage.getItem('cart'))
        if(cart != null){
            number_cart.innerHTML = cart.length
        }
    });
}


function showAddToCart(){
    let cart = JSON.parse(localStorage.getItem('cart'));
    let kq = "";
    if(cart != null){
        document.querySelector('.warning_cart').style.display = 'none';
        for (let i = 0; i < cart.length; i++) {
            let tt = Number(cart[i]['sl'] * cart[i]['gia']);
          kq += `<tr>
                    <td>${i+1}</td>
                    <td>${cart[i]['tensp']}</td>
                    <td><img src="${cart[i]['img']}" width="100"></td>
                    <td>${cart[i]['gia']}</td>
                    <td>${cart[i]['sl']}</td>
                    <td>${tt}</td>
                    <td><a class="btn btn-warning " href="" onclick="xoasp()" id="xoasp">Xóa</a></td>
                </tr>`;
            showCart.innerHTML = kq;
        }
        totalGia();
        
    }
}
showAddToCart();

function xoasp(){
localStorage.removeItem('cart') 
}
function totalGia(){
    let cart = JSON.parse(localStorage.getItem('cart'));
    let total = 0;
    if(cart != null){
        for (let i = 0; i < cart.length; i++) {
            total += cart[i]['gia']* cart[i]['sl'];
            document.querySelector('.total').innerHTML = total;
        }
    }
}


