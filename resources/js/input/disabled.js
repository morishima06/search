
const forms = document.querySelectorAll('form');

for(let i=0;i<forms.length;i++){
    forms[i].addEventListener('submit', ()=>{


        //formのinput要素を処理
        Array.from(forms[i]).forEach((input)=>{


            //値が空の場合
            if(input.value === ''){
                //disabledを有効にする
                input.disabled = true;
            }
        });
        }, false);            
}