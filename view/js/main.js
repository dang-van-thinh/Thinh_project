
let add_cart = document.getElementsByClassName('addcart');
let src_img = document.getElementsByClassName('src_img');
let name_product = document.getElementsByClassName('name_product');
let id_product = document.getElementsByClassName('id_product');
let price = document.getElementsByClassName('price');
let showCart = document.getElementById('showgiohang');
let number_cart = document.querySelector('#number_cart');

var arrCart = [];
var local = localStorage.getItem('cart');
if (local) {
    arrCart = JSON.parse(local);
}
if (arrCart != null) {
    number_cart.innerHTML = arrCart.length
}


function addToCart() {
    for (let i = 0; i < add_cart.length; i++) {
        add_cart[i].addEventListener('click', function () {
            let id_pd = id_product[i].value;
            let check = true;

            if(arrCart != null){
                arrCart.forEach(item => {
                    if (item.id == id_pd) {
                        item.sl = item.sl+1;
                        localStorage.setItem('cart', JSON.stringify(arrCart));
                        check =  false; // nếu có bất kỳ sản phẩm nào có id trùng với id sản phẩm mới thêm thì lập tức gán sl thêm 1 và trả biến check bằng false
                    }
                });
            }
            
            let img = src_img[i].getAttribute('src');
            let tensp = name_product[i].innerText;
            let gia = price[i].innerText;
            let sl = 1;
            let sp = {
                'id': id_pd,
                'tensp': tensp,
                'img': img,
                'gia': gia,
                'sl': sl
            }
            
            if(check){ // sau khi check xong nếu ko có sản phẩm nào trùng thì ta mới thêm object mới vào mảng và mới up lên localstorage
            arrCart.push(sp);
             localStorage.setItem('cart', JSON.stringify(arrCart)); //  đẩy lên localstorage
            }
            // arrCart.push(sp);
            // localStorage.setItem('cart', JSON.stringify(arrCart)); //  đẩy lên localstorage
            let cart = JSON.parse(localStorage.getItem('cart')) // lấy sp về đổ ra mảng
            if (cart != null) {
                number_cart.innerHTML = cart.length
            }
        });
    }
}
addToCart();

// localStorage.getItem('cart')  // trả về dạng string
// let arrCart=  JSON.parse(localStorage.getItem('cart')); // trả về dạng mảng
function showAddToCart() {
    let cart = JSON.parse(localStorage.getItem('cart'));
    if (cart != null) {
        document.querySelector('.warning_cart').style.display = 'none';
        cart.forEach(element => {
            let row = document.createElement("tr");
            let tt = element.sl * element.gia;

            row.innerHTML = `
                        <td>${element.id}</td>
                        <td>${element.tensp}</td>
                        <td><img src="${element.img}" width="100"></td>
                        <td>${element.gia}</td>
                        <td>${element.sl}</td>
                        <td>${tt}</td>
                        <td><a class="btn btn-warning " onclick="xoasp(${element.id})" href="">Xóa</a></td>
                    `;
            showCart.appendChild(row);
        });
        totalGia();
    }
}
showAddToCart();

function xoasp(id) {
    let local = localStorage.getItem('cart');
    if (local) { // kiểm tra đúng
        arrCart = JSON.parse(local);
    }
    arrCart = arrCart.filter(item => item.id != id) // dùng hàm filter để lọc những sản phẩm có trùng trong mảng Cart và add ngược lại vào mảng Cart
    localStorage.setItem('cart', JSON.stringify(arrCart));
    showAddToCart();

    // localStorage.removeItem('cart'); // xóa tất cả biến có tên như nhau trên local
}

function totalGia() {
    let cart = JSON.parse(localStorage.getItem('cart'));
    let total = 0;
    if (cart != null) {
        for (let i = 0; i < cart.length; i++) {
            total += cart[i]['gia'] * cart[i]['sl'];
            document.querySelector('.total').innerHTML = total;
        }
    }
}


