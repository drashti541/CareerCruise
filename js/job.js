//animate-number


const workSection = document.querySelector('.counter');
const workObserver = new IntersectionObserver((entries, observer) => { 
    const [entry] = entries;
    console.log(entry);

    if (entry.isIntersecting == false) return;

    const counterNum = document.querySelectorAll(".counter-row-inner");

    const speed = 200;
    
    counterNum.forEach((curElem) => {
    
        const updateNumber = () => {
            const targetNumber = parseInt(curElem.dataset.number);
            //console.log(targetNumber);    //target data
    
            const initialNum = parseInt(curElem.innerText);
            //console.log(initialNum);     //0 value
    
            const incrementNumber = Math.trunc(targetNumber / speed);
            //console.log(incrementNumber); //10 15 20 25
    
            if (initialNum < targetNumber) {
                curElem.innerText =`${initialNum + incrementNumber}+`;
    
                setTimeout(updateNumber, 10);
            }
        };
    
        updateNumber();
    });
   
    observer.unobserve(workSection);

}, {
    root: null,
    threshold: 0,
});

workObserver.observe(workSection);

