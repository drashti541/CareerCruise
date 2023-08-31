const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
    btn.addEventListener("click",() =>{
        formStepsNum++;
        updateForm();
        updateProgressbar();
    });
});

prevBtns.forEach((btn) => {
    btn.addEventListener("click",() =>{
        formStepsNum--;
        updateForm();
        updateProgressbar();
    });
});

function updateForm(){
    formSteps.forEach((formStep)=>{
        formStep.classList.contains("form-active")&&
        formStep.classList.remove("form-active");
    });
    formSteps[formStepsNum].classList.add("form-active");
}

function updateProgressbar(){
    progressSteps.forEach((progressStep,idx)=>{
        if(idx < formStepsNum +1){
            progressStep.classList.add("process-active");
        } else {
            progressStep.classList.remove("process-active");
        }
    });

    const progressActive = document.querySelectorAll(".process-active");
    progress.style.width = ((progressActive.length - 1)/(progressSteps.length-1)) * 100 + '%';
}
