liste = recupCookie("panier")
if (liste!=null) var montab = JSON.parse(liste)
else montab = Array()
console.log(montab)

document.getElementById('liste').value=JSON.stringify(montab);


var totalgeneral=0
montab.forEach(uneinfo => {

    html = `<div><tr id="${uneinfo.id}">
    <img src="${uneinfo.affiche}">
    <h3>${uneinfo.titre}</h3>
    <p>${uneinfo.quantite}</p>
    <p><span class="unitaire">${uneinfo.prix}</span>€</p>
    <p>Prix total de :<span class="prix">${uneinfo.quantite * uneinfo.quantite}</span>€</p>
    </tr></div>`;

    document.getElementById('zone').innerHTML += html
    totalgeneral += uneinfo.prix * uneinfo.quantite
})

function recupCookie(nom){

    if(document.cookie.length === 0)return null;

    var cookies = document.cookie.split("; "); //separe chaque parametre contenu dans le cookie
    cookies.forEach(element => {
        ligne=element.split("=");
        if(ligne[0]===nom) sortie =ligne[1]
        else sortie=null;
    })
    return sortie
}