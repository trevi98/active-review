// alert("dfdf");
let reviews;
let i=0;

const URLROOT = "/projects/activ/review";

let reviewBox = document.querySelector("#card");
let h4  =document.querySelector("#card h4");

let xhr = new XMLHttpRequest();

xhr.open("GET",URLROOT+"/reviews/show_accepted_ajax",true);
// xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xhr.onload = function(){
    if(this.status == 200){
        // let i=0;
        
        console.log(this.responseText);
         reviews = JSON.parse(this.responseText);
    // reviewBox.textContent = reviews[0].first_name;

        setInterval(animai,2000);
         
    }
    else{
        // console.log("err");
    }


}

xhr.send();
animai();

function animai(){
    // console.log(reviews);
    if (typeof reviews !== 'undefined') {

        document.querySelector("#card .incardtext").textContent=reviews[i].comment;
        document.querySelector("#card h4").textContent=reviews[i].first_name;
        
        i++;
        if(i>=reviews.length){
            i=0;
        }

      }
}