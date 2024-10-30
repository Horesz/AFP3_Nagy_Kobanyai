function addToCart(productHTML){
    let name = productHTML.getElementsByClassName('termekNev')[0].innerHTML;
    let ar = parseInt(productHTML.getElementsByClassName('ar')[0].innerHTML);
    let kosar = document.getElementById('kosar');
    let osszesitoElem = document.getElementById('sumMoney');
    osszesitoElem.innerHTML = parseInt(osszesitoElem.innerHTML) + ar;
    if (!kosar.innerHTML.includes(name))
    {
        kosar.innerHTML += `<div class="kosarElem"><p>${name}</p><p>${ar} Ft</p><p class="darab">1</p>db<button onclick="subtractFromCart('${name}')">-</button></div>`;
        return;
    }
    let kosarElemek = Array.from(kosar.getElementsByClassName('kosarElem'));
    let darabElem = kosarElemek.find(x => x.innerHTML.includes(name)).getElementsByClassName('darab')[0];
    darabElem.innerHTML = +(darabElem.innerHTML) + 1;
}

function subtractFromCart(productName){
    let termek = Array.from(document.getElementsByClassName('termekSzoveg')).find(x => x.innerHTML.includes(productName));
    let ar = parseInt(termek.getElementsByClassName('ar')[0].innerHTML);
    let osszesitoElem = document.getElementById('sumMoney');
    let kosar = document.getElementById('kosar');
    osszesitoElem.innerHTML = parseInt(osszesitoElem.innerHTML) - ar;
    if (kosar.innerHTML.includes(productName)){
        let kosarElem = Array.from(kosar.getElementsByClassName('kosarElem')).find(x => x.innerHTML.includes(productName));
        let darabElem = kosarElem.getElementsByClassName('darab')[0];
        if (parseInt(darabElem.innerHTML) == 1)
        {
            kosarElem.remove();
            return;
        }
        darabElem.innerHTML = +(darabElem.innerHTML) - 1;
    }
}