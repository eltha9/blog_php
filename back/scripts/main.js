const login = {
    node: document.querySelector('section.login'),
    state : false
}
const sing = {
    node: document.querySelector('section.sing-in'),
    state: false
}


const loginButton = document.querySelector('button.login')
const singButton = document.querySelector('button.sing-in')

loginButton.addEventListener('click',()=>{
  
    login.node.classList.toggle('on')

})

singButton.addEventListener('click',()=>{
  
    sing.node.classList.toggle('on')

})
