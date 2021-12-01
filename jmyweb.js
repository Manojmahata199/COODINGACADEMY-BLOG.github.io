const menuopen=()=>{
    document.getElementById('menu-bar').style.width="280px";
}
const menuclose=()=>{
    document.getElementById('menu-bar').style.width="0px";
}
const dropmenuopen=()=>{
    document.getElementById('droplist').style.height="350px";
}
const dropmenuclose=()=>{
    document.getElementById('droplist').style.height="0px";
}

const language=()=>{
    document.getElementById('language1').style.opacity="1";
    document.getElementById('language2').style.opacity="1";
    document.getElementById('language3').style.opacity="1";
    document.getElementById('language4').style.opacity="1";
    document.getElementById('datastruc1').style.opacity="0";
    document.getElementById('datastruc2').style.opacity="0";
    document.getElementById('database1').style.opacity="0";
    document.getElementById('database2').style.opacity="0";
    document.getElementById('frontend1').style.opacity="0";
    document.getElementById('frontend2').style.opacity="0";
    document.getElementById('backend1').style.opacity="0";
    document.getElementById('backend2').style.opacity="0";
    document.getElementById('algorithm1').style.opacity="0";
    document.getElementById('algorithm2').style.opacity="0";
}
const all=()=>{
    document.getElementById('language1').style.opacity="1";
    document.getElementById('language2').style.opacity="1";
    document.getElementById('language3').style.opacity="1";
    document.getElementById('language4').style.opacity="1";
    document.getElementById('datastruc1').style.opacity="1";
    document.getElementById('datastruc2').style.opacity="1";
    document.getElementById('database1').style.opacity="1";
    document.getElementById('database2').style.opacity="1";
    document.getElementById('frontend1').style.opacity="1";
    document.getElementById('frontend2').style.opacity="1";
    document.getElementById('backend1').style.opacity="1";
    document.getElementById('backend2').style.opacity="1";
    document.getElementById('algorithm1').style.opacity="1";
    document.getElementById('algorithm2').style.opacity="1";
}
const datastruc=()=>{
    document.getElementById('language1').style.opacity="0";
    document.getElementById('language2').style.opacity="0";
    document.getElementById('language3').style.opacity="0";
    document.getElementById('language4').style.opacity="0";
    document.getElementById('datastruc1').style.opacity="1";
    document.getElementById('datastruc2').style.opacity="1";
    document.getElementById('database1').style.opacity="0";
    document.getElementById('database2').style.opacity="0";
    document.getElementById('frontend1').style.opacity="0";
    document.getElementById('frontend2').style.opacity="0";
    document.getElementById('backend1').style.opacity="0";
    document.getElementById('backend2').style.opacity="0";
    document.getElementById('algorithm1').style.opacity="0";
    document.getElementById('algorithm2').style.opacity="0";
}

const algorithm=()=>{
    document.getElementById('language1').style.opacity="0";
    document.getElementById('language2').style.opacity="0";
    document.getElementById('language3').style.opacity="0";
    document.getElementById('language4').style.opacity="0";
    document.getElementById('datastruc1').style.opacity="0";
    document.getElementById('datastruc2').style.opacity="0";
    document.getElementById('database1').style.opacity="0";
    document.getElementById('database2').style.opacity="0";
    document.getElementById('frontend1').style.opacity="0";
    document.getElementById('frontend2').style.opacity="0";
    document.getElementById('backend1').style.opacity="0";
    document.getElementById('backend2').style.opacity="0";
    document.getElementById('algorithm1').style.opacity="1";
    document.getElementById('algorithm2').style.opacity="1";
}
const database=()=>{
    document.getElementById('language1').style.opacity="0";
    document.getElementById('language2').style.opacity="0";
    document.getElementById('language3').style.opacity="0";
    document.getElementById('language4').style.opacity="0";
    document.getElementById('datastruc1').style.opacity="0";
    document.getElementById('datastruc2').style.opacity="0";
    document.getElementById('database1').style.opacity="1";
    document.getElementById('database2').style.opacity="1";
    document.getElementById('frontend1').style.opacity="0";
    document.getElementById('frontend2').style.opacity="0";
    document.getElementById('backend1').style.opacity="0";
    document.getElementById('backend2').style.opacity="0";
    document.getElementById('algorithm1').style.opacity="0";
    document.getElementById('algorithm2').style.opacity="0";
}
const frontend=()=>{
    document.getElementById('language1').style.opacity="0";
    document.getElementById('language2').style.opacity="0";
    document.getElementById('language3').style.opacity="0";
    document.getElementById('language4').style.opacity="0";
    document.getElementById('datastruc1').style.opacity="0";
    document.getElementById('datastruc2').style.opacity="0";
    document.getElementById('database1').style.opacity="0";
    document.getElementById('database2').style.opacity="0";
    document.getElementById('frontend1').style.opacity="1";
    document.getElementById('frontend2').style.opacity="1";
    document.getElementById('backend1').style.opacity="0";
    document.getElementById('backend2').style.opacity="0";
    document.getElementById('algorithm1').style.opacity="0";
    document.getElementById('algorithm2').style.opacity="0";
}
const backend=()=>{
    document.getElementById('language1').style.opacity="0";
    document.getElementById('language2').style.opacity="0";
    document.getElementById('language3').style.opacity="0";
    document.getElementById('language4').style.opacity="0";
    document.getElementById('datastruc1').style.opacity="0";
    document.getElementById('datastruc2').style.opacity="0";
    document.getElementById('database1').style.opacity="0";
    document.getElementById('database2').style.opacity="0";
    document.getElementById('frontend1').style.opacity="0";
    document.getElementById('frontend2').style.opacity="0";
    document.getElementById('backend1').style.opacity="1";
    document.getElementById('backend2').style.opacity="1";
    document.getElementById('algorithm1').style.opacity="0";
    document.getElementById('algorithm2').style.opacity="0";
}