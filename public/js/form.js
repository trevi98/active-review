let stars = document.querySelectorAll(".fa");
for(let i=0;i<5;i++){

    // console.log(stars);
    stars[i].addEventListener("click",function(e){
        if(e.target.id == "s1"){
            // document.getElementById("star").setAttribute("value",1);
            document.querySelector("#star").value="1";
            document.querySelector("#s1").style.color="#fdce04";
            document.querySelector("#s2").style.color="#000";
            document.querySelector("#s3").style.color="#000";
            document.querySelector("#s4").style.color="#000";
            document.querySelector("#s5").style.color="#000";
        }
        if(e.target.id == "s2"){
            document.querySelector("#star").value="2";

            document.querySelector("#s1").style.color="#fdce04";
            document.querySelector("#s2").style.color="#fdce04";
            document.querySelector("#s3").style.color="#000";
            document.querySelector("#s4").style.color="#000";
            document.querySelector("#s5").style.color="#000";
        }
        if(e.target.id == "s3"){
            document.querySelector("#star").value="3";

            document.querySelector("#s1").style.color="#fdce04";
            document.querySelector("#s2").style.color="#fdce04";
            document.querySelector("#s3").style.color="#fdce04";
            document.querySelector("#s4").style.color="#000";
            document.querySelector("#s5").style.color="#000";
        }
        if(e.target.id == "s4"){
            document.querySelector("#star").value="4";

            document.querySelector("#s1").style.color="#fdce04";
            document.querySelector("#s2").style.color="#fdce04";
            document.querySelector("#s3").style.color="#fdce04";
            document.querySelector("#s4").style.color="#fdce04";
        }
        if(e.target.id == "s5"){
            document.querySelector("#star").value="5";

            document.querySelector("#s1").style.color="#fdce04";
            document.querySelector("#s2").style.color="#fdce04";
            document.querySelector("#s3").style.color="#fdce04";
            document.querySelector("#s4").style.color="#fdce04";
            document.querySelector("#s5").style.color="#fdce04";
        }
    })
}

let avatars = document.querySelectorAll(".common_avatar");
for(let i = 0;i<12;i++){
    avatars[i].addEventListener("click",function(e){
        // e.target.style.border="solid 2px #fdce04";
        // if(e.target.id == "a1"){
            for(let j=0 ;j<12;j++){
                avatars[j].style.border="none";
                e.target.style.border="solid 2px #fdce04";
            }
            let x= e.target.src;
            x= x.replace("http://localhost/projects/activ/review/public/uploads/","");
            document.querySelector("#avatar").value=x;
        // if(e.target.id == "a2"){
        //     for(let j=0 ;j<12;j++){
        //         avatars[j].style.border="none";
        //         e.target.style.border="solid 2px #fdce04";
        //         let x= e.target.src;
        //         x= x.replace("http://localhost/projects/activ/review/public/uploads/","");
        //         document.querySelector("#avatar").value=x;
        //     }
        // if(e.target.id == "a1"){
        //     for(let j=0 ;j<12;j++){
        //         avatars[j].style.border="none";
        //         e.target.style.border="solid 2px #fdce04";
        //         let x= e.target.src;
        //         x= x.replace("http://localhost/projects/activ/review/public/uploads/","");
        //         document.querySelector("#avatar").value=x;
        //     }
        // if(e.target.id == "a1"){
        //     for(let j=0 ;j<12;j++){
        //         avatars[j].style.border="none";
        //         e.target.style.border="solid 2px #fdce04";
        //         let x= e.target.src;
        //         x= x.replace("http://localhost/projects/activ/review/public/uploads/","");
        //         document.querySelector("#avatar").value=x;
        //     }
        // if(e.target.id == "a1"){
        //     for(let j=0 ;j<12;j++){
        //         avatars[j].style.border="none";
        //         e.target.style.border="solid 2px #fdce04";
        //         let x= e.target.src;
        //         x= x.replace("http://localhost/projects/activ/review/public/uploads/","");
        //         document.querySelector("#avatar").value=x;
        //     }
        // if(e.target.id == "a1"){
        //     for(let j=0 ;j<12;j++){
        //         avatars[j].style.border="none";
        //         e.target.style.border="solid 2px #fdce04";
        //         let x= e.target.src;
        //         x= x.replace("http://localhost/projects/activ/review/public/uploads/","");
        //         document.querySelector("#avatar").value=x;
        //     }
        // if(e.target.id == "a1"){
        //     for(let j=0 ;j<12;j++){
        //         avatars[j].style.border="none";
        //         e.target.style.border="solid 2px #fdce04";
        //         let x= e.target.src;
        //         x= x.replace("http://localhost/projects/activ/review/public/uploads/","");
        //         document.querySelector("#avatar").value=x;
        //     }
        // if(e.target.id == "a1"){
        //     for(let j=0 ;j<12;j++){
        //         avatars[j].style.border="none";
        //         e.target.style.border="solid 2px #fdce04";
        //         let x= e.target.src;
        //         x= x.replace("http://localhost/projects/activ/review/public/uploads/","");
        //         document.querySelector("#avatar").value=x;
        //     }
        // if(e.target.id == "a1"){
        //     for(let j=0 ;j<12;j++){
        //         avatars[j].style.border="none";
        //         e.target.style.border="solid 2px #fdce04";
        //         let x= e.target.src;
        //         x= x.replace("http://localhost/projects/activ/review/public/uploads/","");
        //         document.querySelector("#avatar").value=x;
        //     }
        // if(e.target.id == "a1"){
        //     for(let j=0 ;j<12;j++){
        //         avatars[j].style.border="none";
        //         e.target.style.border="solid 2px #fdce04";
        //         let x= e.target.src;
        //         x= x.replace("http://localhost/projects/activ/review/public/uploads/","");
        //         document.querySelector("#avatar").value=x;
        //     }
        // if(e.target.id == "a1"){
        //     for(let j=0 ;j<12;j++){
        //         avatars[j].style.border="none";
        //         e.target.style.border="solid 2px #fdce04";
        //         let x= e.target.src;
        //         x= x.replace("http://localhost/projects/activ/review/public/uploads/","");
        //         document.querySelector("#avatar").value=x;
        //     }
        // if(e.target.id == "a1"){
        //     for(let j=0 ;j<12;j++){
        //         avatars[j].style.border="none";
        //         e.target.style.border="solid 2px #fdce04";
        //         let x= e.target.src;
        //         x= x.replace("http://localhost/projects/activ/review/public/uploads/","");
        //         document.querySelector("#avatar").value=x;
        //     }

        // }
    })
}

let b=true;

let like  = document.querySelector(".like");
like.addEventListener("click",function(e){
    if(b){
        let y = document.querySelector(".like .reacts");
        y.style.display="flex";
        y.style.visibility="visible";
        b=false;
    }
    else{
        let y = document.querySelector(".like .reacts");
        y.style.display="none";
        y.style.visibility="hidden";
        b=true;
    }
    // y.style.display="flex";
});
let ra = document.querySelectorAll(".common_react");
for(let i=0;i<4;i++){
    ra[i].addEventListener("click",function(e){
        // let z = document.querySelector(".reacts");
        // z.style.display="none";
        // z.style.visibility="hidden";
        
        document.querySelector("#chosen_react").value=e.target.id;
    })
}

document.querySelector(".input8").addEventListener("click",function(e){
    let v = document.querySelectorAll(".common_avatar");
    for(let j=0 ;j<12;j++){
        v[j].style.border="none";
    }
    document.querySelector("#avatar").value="none";


});

    // console.log(e.target.id);