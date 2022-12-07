
document.getElementById("mini-menu").addEventListener("click", 
showMobileMenu
);
function showMobileMenu () {
    document.getElementById("titles-mobile").style.display = "block";


}


/* jjjjjjjj */





const openIt=document.getElementById('open-form-container');

openIt.addEventListener("click", writeHtml);








function writeHtml()
    
{
    
    var Body=document.body;
Body.innerHTML += 
  ` 
  <main class="container form" >
        
        <div class="horizontal">
            <figure><img src="./logo/Unsdvsvtitled-1.png" alt="" srcset=""></figure>
            <div class="vertical">
                <div action="">
                    <label for="" >Full Name :</label>
                    <input type="text">
                    <label for="" >E-mail :</label>
                    <input type="text">
                    <label for="" >Message :</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            
        </div>
        <button id="close-form-container">Send</button>
    </main>
    <div class="background-form form" ></div>
 `;
 const closeIt=document.getElementById('close-form-container');
    
 closeIt.addEventListener("click", deleteHtml);
};

function deleteHtml()
    
{
    const elements = document.getElementsByClassName('form');
    console.log(elements);
    while(elements.length > 0){
        elements[0].parentNode.removeChild(elements[0]);
    }
 
};