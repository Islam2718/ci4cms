// $(function() {
//     // Hide the hidden sections.
//     // Use JS to do this in case the user doesn't have JS 
//     // enabled.
//     $('.hidden').hide();

//     // Setup an event listener for each trigger checkbox that 
//     // fires when the state of the checkbox changes.
//     $('.trigger').change(function() {
//         // Get the ID of the hidden area from the data-trigger
//         // attribute.
//         var hiddenId = $(this).attr("data-trigger");

//         // Check to see if the checkbox is checked.
//         // If it is, show the fields and populate the input.
//         // If not, hide the fields.
//         if ($(this).is(':checked')) {
//             // Show the hidden fields.
//             $("#" + hiddenId).show();
//         } else {
//             // Make sure that the hidden fields are indeed
//             // hidden.
//             $("#" + hiddenId).hide();

//             // $("#hidden_field").val("");
//         }
//     });
// });




/******************************add to cart*****************************/
function setLSData(data, item) {
    let localData = JSON.parse(localStorage.getItem('cart'));
    // let newData = data;

    if (!localData || localData.length === 0) {
        data.push(item);
        console.log('nai')
        localStorage.setItem('cart', JSON.stringify(data));
        // window.location.reload();
    } else {
        console.log('ache')
        localData.map(function (localItem, index) {
            if (localItem.productId == item.productId && localItem.size == item.size) {
                item.count = localItem.count + 1;
                item.price = localItem.price + item.unitPrice;
                // newData.push(item);
                console.log('same')
            } else {
                data.push(localItem);
                console.log('localItem', localItem)
                console.log('data', data)
            }
        });
        data.push(item);
        localStorage.setItem('cart', JSON.stringify(data));
        // window.location.reload();
    }

    return !!JSON.parse(localStorage.getItem('cart'));
}

function renderMiniCart(cartSelector,  totalSelector) {
    let localData = JSON.parse(localStorage.getItem('cart'));
    let cartItems = '';
    let cartCount = 0;
    let items = cartList();
    if(!!localData && localData.length > 0) {
        localData.map(function(localItem, index){
            cartItems += '<div class="single-cart-item d-flex" data-product-id="'+ localItem.productId +'" data-unit-price="'+ localItem.unitPrice +'">';
            cartItems += '    <figure class="product-thumb">';
            cartItems += '        <a href="'+ localItem.url +'"><img class="img-fluid"';
            cartItems += '                src="'+ localItem.image +'" alt="Products" /></a>';
            cartItems += '    </figure>';
            cartItems += '    <div class="product-details">';
            cartItems += '        <h2><a href="'+ localItem.url +'">'+ localItem.name +'</a></h2>';
            cartItems += '        <div class="cal d-flex justify-content-between align-items-center">';
            cartItems += '            <div class="size d-flex">';
            cartItems += '                <span class="font-weight-normal mr-1">Size: </span>';
            cartItems += '                <span class="cart-item-size">'+ localItem.size +'</span>';
            cartItems += '            </div>';
            cartItems += '            <div class="price-part tk-part">';
            cartItems += '                <span class="tk-sign">'+ localItem.price +'</span>';
            cartItems += '            </div>';
            cartItems += '        </div>';
            cartItems += '        <div class="pro-quantity">';
            cartItems += '            <div class="product-count">';
            cartItems += '                <form action="#" class="display-flex">';
            cartItems += '                    <div class="qtyminus">-</div>';
            cartItems += '                    <input type="text" name="quantity'+ localItem.productId +'" value="'+ localItem.count +'" class="qty">';
            cartItems += '                    <div class="qtyplus">+</div>';
            cartItems += '                </form>';
            cartItems += '            </div>';
            cartItems += '        </div>';
            cartItems += '    </div>';
            cartItems += '    <a href="#" class="remove-cart-item remove-icon"><i class="far fa-trash-alt"></i></a>';
            cartItems += '</div>';


            cartCount = cartCount + parseInt(localItem.count);
        })

    } else {
        cartItems += '<h3 class="text-center">Empty Cart</h3>';
    }


    $('#cart-total-count').html(cartCount);
    $('.mini-cart-body').html(cartItems);


    $('.qtyplus').each(function(i, elm){
        // console.log(elm)
        $(elm).on('click', function(){
            let data = [];
            let qty = $(this).siblings('input');
            let cartItem = $(this).closest('.single-cart-item');
            qty.val(function(i, oldval) {
                return parseInt( oldval, 10) + 1;
            });
            localData.map(function(localItem, index){
                if (
                    localItem.productId == cartItem.data('product-id') &&
                    localItem.size == cartItem.find('.cart-item-size')[0].innerText
                ) {
                    localItem.count = qty.val();
                    localItem.price = localItem.price + cartItem.data('unit-price');
                }
                data.push(localItem);
            })
            localStorage.setItem('cart', JSON.stringify(data));
            renderMiniCart();

            console.log(cartItem.find('.cart-item-size')[0].innerText);
        })
    })
    
    $('.qtyminus').each(function(i, elm){
        // console.log(elm)
        $(elm).on('click', function(){
            let data = [];
            let qty = $(this).siblings('input');
            let cartItem = $(this).closest('.single-cart-item');
            qty.val(function(i, oldval) {
                oldval = parseInt( oldval, 10);
                return  (oldval - 1) > 0 ? oldval - 1 : 1 ;
            });
            localData.map(function(localItem, index){
                if (
                    localItem.productId == cartItem.data('product-id') &&
                    localItem.size == cartItem.find('.cart-item-size')[0].innerText &&
                    qty.val() > 0 && localItem.price > localItem.unitPrice
                ) {
                    localItem.count = qty.val();
                    localItem.price = localItem.price - cartItem.data('unit-price');
                }
                data.push(localItem);
            })
            localStorage.setItem('cart', JSON.stringify(data));
            renderMiniCart();
            console.log(cartItem.find('.cart-item-size')[0].innerText);
        })
    })

    $('.remove-cart-item').each(function(i, elm){
        $(elm).on('click', function(e){
            e.preventDefault();
            console.log('deleted')
            let data = [];
            let cartItem = $(this).closest('.single-cart-item');
            localData.map(function(localItem, index){
                if (
                    localItem.productId !== cartItem.data('product-id') ||
                    (localItem.productId == cartItem.data('product-id') &&
                    localItem.size != cartItem.find('.cart-item-size')[0].innerText)
                ) {
                    console.log(localItem.size, cartItem.find('.cart-item-size')[0].innerText);
                    data.push(localItem);
                }
            })
            // console.log(localItem.productId == cartItem.data('product-id') &&
            // localItem.size != cartItem.find('.cart-item-size')[0].innerText)
            localStorage.setItem('cart', JSON.stringify(data));
            renderMiniCart();
        })
    })


}

function cartList() {
    return JSON.parse(localStorage.getItem('cart'));
}

function cartTotalCount() {
    let items = cartList();
    let count = 0;
    items.map(function(item) {
        // console.log(i);
        count = count + parseInt(item.count);
    })
    return count;
}

function cartTotalPrice() {
    let items = cartList();
    let price = 0;
    items.map(function(item) {
        // console.log(i);
        price = price + parseInt(item.price);
    })
    return price;
}



/******pos cart *****/
let miniCartSubTotal = cartTotalPrice();
// document.getElementById("cart-subtotal").innerHTML = miniCartSubTotal;
$('#product_subtotal').html(miniCartSubTotal);
/******pos cart *****/





function renderBigCart(cartSelector,  totalSelector) {
    const cart = document.querySelector(cartSelector);
    const total = document.querySelector(totalSelector);
    let items = cartList();
    if(!!items && items.length > 0) {
        cart.innerHTML = items.map((item) => `
            <input type="hidden" name="product_thumb[]" value="${item.image}">
            <input type="hidden" name="product_name[]" value="${item.name}">
            <input type="hidden" name="product_size[]" value="${item.size}">
            <input type="hidden" name="product_price[]" value="${item.unitPrice}">
            <input type="hidden" name="product_qty[]" value="${item.count}">
            <tr class="single-big-cart-item" data-product-id="${item.productId}" data-unit-price="${item.unitPrice}">
                <td class="pro-thumbnail"><a href="#"><img class="img-fluid" width="90" src="${item.image}"
                                                            alt="Product"/></a></td>
                <td class="pro-title"><a href="${item.url}">${item.name}</a></td>
                <td class="pro-size">${item.size}</td>
                <td class="pro-price tk-part"><span class="tk-sign">${item.unitPrice}</span></td>
                <td class="pro-quantity">
                    <div class="product-count">
                        <form action="#" class="display-flex">
                            <div class="qtyminus">-</div>
                            <input type="text" name="quantity${item.productId}" value="${item.count}" class="qty">
                            <div class="qtyplus">+</div>
                        </form>
                    </div>
                </td>
                <td class="pro-subtotal tk-part"><span class="tk-sign">${item.price}</span></td>
                <td class="pro-remove"><a href="#" class="remove-cart-item"><i class="fas fa-trash"></i></a></td>
            </tr>`).join("")
    } else {
        cart.innerHTML = `<tr class="single-big-cart-item"}"><td colspan="7"><h3 class="text-center">Empty Cart</h3></td></tr>`
    }


    total.innerHTML = cartTotalPrice();
    $('.qtyplus').each(function(i, elm){
        // console.log(elm)
        $(elm).on('click', function(){
            let data = [];
            let qty = $(this).siblings('input');
            let cartItem = $(this).closest('.single-big-cart-item');
            qty.val(function(i, oldval) {
                return parseInt( oldval, 10) + 1;
            });
            let items = cartList();
            items.map(function(localItem, index){
                if (
                    localItem.productId == cartItem.data('product-id') &&
                    localItem.size == cartItem.find('.pro-size')[0].innerText
                ) {
                    localItem.count = qty.val();
                    localItem.price = localItem.price + cartItem.data('unit-price');
                }
                data.push(localItem);
            })
            localStorage.setItem('cart', JSON.stringify(data));
            renderMiniCart();
            renderBigCart(cartSelector, '.total-price');
            // console.log(cartItem.find('.pro-size')[0].innerText);
        })
    })


    $('.qtyminus').each(function(i, elm){
        // console.log(elm)
        $(elm).on('click', function(){
            let data = [];
            let qty = $(this).siblings('input');
            let cartItem = $(this).closest('.single-big-cart-item');
            qty.val(function(i, oldval) {
                oldval = parseInt( oldval, 10);
                return  (oldval - 1) > 0 ? oldval - 1 : 1 ;
            });
            let items = cartList();
            items.map(function(localItem, index){
                if (
                    localItem.productId == cartItem.data('product-id') &&
                    localItem.size == cartItem.find('.pro-size')[0].innerText &&
                    qty.val() > 0 && localItem.price > localItem.unitPrice
                ) {
                    localItem.count = qty.val();
                    localItem.price = localItem.price - cartItem.data('unit-price');
                }
                data.push(localItem);
            })
            localStorage.setItem('cart', JSON.stringify(data));
            renderMiniCart();
            renderBigCart(cartSelector,'.total-price');
            // console.log(cartItem.find('.pro-size')[0].innerText);
        })
    })

    $('.remove-cart-item').each(function(i, elm){
        $(elm).on('click', function(e){
            e.preventDefault();
            let data = [];
            let cartItem = $(this).closest('.single-big-cart-item');
            console.log(cartItem);
            let items = cartList();
            items.map(function(localItem, index){
                if (
                    localItem.productId !== cartItem.data('product-id') ||
                    (localItem.productId == cartItem.data('product-id') &&
                    localItem.size != cartItem.find('.pro-size')[0].innerText)
                ) {
                    // console.log(localItem.size, cartItem.find('.pro-size')[0].innerText);
                    data.push(localItem);
                }
            })
            // console.log(localItem.productId == cartItem.data('product-id') &&
            // localItem.size != cartItem.find('.pro-size')[0].innerText)
            localStorage.setItem('cart', JSON.stringify(data));
            renderMiniCart();
            renderBigCart(cartSelector, '.total-price');
        })
    })
}


function addToCartProdCard () {
    $('.add-to-cart').each(function (i, elm) {
        // console.log(elm)
        $(elm).on('click', function (e) {
            e.stopPropagation();
            let items = [];
            let product = $(this).closest('.product-part');
            let productId = product.data('product-id');
            let image = product.find('.product-img').children('img').attr('src');
            let name = product.find('.product-name')[0].innerText;
            let size = $('input[name="size' + productId + '"]:checked').val();
            let count = 1;
            let price = product.find('.product-price').data('selling-price');
            let url = product.find('.product-d-link').attr('href');
            if (!!size) {
                let item = {
                    'productId': productId,
                    'image': image,
                    'name': name,
                    'size': size,
                    'count': count,
                    'price': price,
                    'unitPrice': price,
                    'url': url,
                }

                if (!$.isEmptyObject(item)) {
                    // items.push(item);
                    // console.log(JSON.stringify(items));
                    setLSData(items, item);
                    renderMiniCart();
                    // localStorage.setItem('cart', JSON.stringify(items));
                }


            } else {
                alert('Please select a size!');
            }



            // console.log(price);
        });
    });

}

renderMiniCart();


// $('.suggested-product-slider').on('initialized.owl.carousel', addToCartProdCard());