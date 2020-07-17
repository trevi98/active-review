// alert("dfdf");
// const URLROOT = "/projects/activ/review";
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
    animai();
        setInterval(animai,9000);
         
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
        document.querySelector("#card_link").href=URLROOT+"/reviews/show_review/"+reviews[i].id;
        if(reviews[i].avatar!="none"){

            document.querySelector(".dot img").src="../../public/uploads/"+reviews[i].avatar;
        }
        let fa = document.querySelectorAll(".fa");
        if(reviews[i].star == "1"){
            for(let j=0;j<5;j++){
                fa[j].style.color="#fff";
            }
            document.querySelector("#s1").style.color="#fdce04";
        }
        if(reviews[i].star == "2"){
            for(let j=0;j<5;j++){
                fa[j].style.color="#fff";
            }
            document.querySelector("#s1").style.color="#fdce04";
            document.querySelector("#s2").style.color="#fdce04";
        }
        if(reviews[i].star == "3"){
            for(let j=0;j<5;j++){
                fa[j].style.color="#fff";
            }
            document.querySelector("#s1").style.color="#fdce04";
            document.querySelector("#s2").style.color="#fdce04";
            document.querySelector("#s3").style.color="#fdce04";
        }
        if(reviews[i].star == "4"){
            for(let j=0;j<5;j++){
                fa[j].style.color="#fff";
            }
            document.querySelector("#s1").style.color="#fdce04";
            document.querySelector("#s2").style.color="#fdce04";
            document.querySelector("#s3").style.color="#fdce04";
            document.querySelector("#s4").style.color="#fdce04";
        }
        if(reviews[i].star == "5"){
            for(let j=0;j<5;j++){
                fa[j].style.color="#fff";
            }
            document.querySelector("#s1").style.color="#fdce04";
            document.querySelector("#s2").style.color="#fdce04";
            document.querySelector("#s3").style.color="#fdce04";
            document.querySelector("#s4").style.color="#fdce04";
            document.querySelector("#s5").style.color="#fdce04";
        }
        
        if(reviews[i].react == "1"){
            document.querySelector(".react img").src="../../public/uploads/care.png";
            
        }
        if(reviews[i].react == "2"){
            document.querySelector(".react img").src="../../public/uploads/love.png";

        }
        if(reviews[i].react == "3"){
            document.querySelector(".react img").src="../../public/uploads/happy.png";

        }
        if(reviews[i].react == "4"){
            document.querySelector(".react img").src="../../public/uploads/like-logo.jpg";

        }

        i++;
        if(i>=reviews.length){
            i=0;
        }

      }
}