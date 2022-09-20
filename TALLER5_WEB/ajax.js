
console.log('correct');
document.querySelector('#boton').addEventListener('click', traerDatos);

function traerDatos(){

    const https = new XMLHttpRequest();
    https.open('GET', 'https://jsonplaceholder.typicode.com/users', true);
    https.send();
    https.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){

            

            let datos = JSON.parse(this.responseText);
            let res = document.querySelector('#respuesta');
            res.innerHTML = '';
            
            for(let item of datos){
                console.log(item.username);
                res.innerHTML += `
                
                <tr>
                                    <td >${item.name}</td>
                                    <td >${item.username}</td>
                                    <td >${item.email}</td>
                                    <td ><table><td>${item.address.street}</td>
                                    <td>Suite : ${item.address.suite}</td>
                                    <td>Ciudad : ${item.address.city}</td>
                                    <td>Codigo postal : ${item.address.zipcode}</td>
                                    <td>lat : ${item.address.geo.lat}</td>
                                    <td>lng : ${item.address.geo.lng}</td></table></td>
                                    <td >${item.phone}</td>
                                    <td >${item.website}</td>
                                    <td><table><td>Nombre : ${item.company.name}</td>
                                    <td>Eslogan : ${item.company.catchPhrase}</td>
                                    <td>BS : ${item.company.bs}</td></table></td>
                                </tr>
                                `                                
            }

        }
    }
};
