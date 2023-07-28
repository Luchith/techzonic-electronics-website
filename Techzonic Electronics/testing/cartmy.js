const product = [
    {
        id: 0,
        image: 'heatergun.jpg',
        title: 'Heater Gun',
        price: 22,
    },
    {
        id: 1,
        image: 'inductors.jpeg',
        title: 'Inductors',
        price: 2,
    },
    {
        id: 2,
        image: 'intergrated.jpg',
        title: 'IC',
        price: 1,
    },
    {
        id: 3,
        image: 'iron.jpg',
        title: 'Electric Soldering Iron',
        price: 14,
    },
    {
        id: 4,
        image: 'LCD.png',
        title: 'LCD Display Modules',
        price: 14,
    },
    {
        id: 5,
        image: 'diodes.jpg',
        title: 'Diodes',
        price: 14,
    },

    {
        id: 6,
        image: 'LDR-module-3-pin.jpg',
        title: 'LDR Module 3 pin',
        price: 14,
    },
    {
        id: 7,
        image: 'Micromotors.jpg',
        title: 'Micro Moters',
        price: 2,
    },

    {
        id: 8,
        image: 'multimeter.jpg',
        title: 'Multi Meter',
        price: 15,
    },
    {
        id: 9,
        image: 'power.jpg',
        title: 'Power Supply Adapter',
        price: 2,
    },
    {
        id: 10,
        image: 'resistors.jpg',
        title: 'Resistors',
        price: 1,
    },
    {
        id: 11,
        image: 'screw.jpg',
        title: 'Screw Drivers',
        price: 1,
    },
    {
        id: 12,
        image: 'transistors.png',
        title: 'Transistors',
        price: 1,
    },
    {
        id: 13,
        image: 'switches.jpg',
        title: 'Switches',
        price: 1,
    },
    {
        id: 14,
        image: 'wires.jpg',
        title: 'Circuit Wire',
        price: 2,
    },
];
const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>$ ${price}.00</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "$ "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "$ "+total+".00";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>$ ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }

    
}
