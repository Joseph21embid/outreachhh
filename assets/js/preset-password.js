document.addEventListener('DOMContentLoaded', () =>{

  // Toggle password visibility
  const togglePassword = document.getElementById('togglePassword');
  const toggleConfirmPassword = document.getElementById('toggleCPassword');
  const passwordInput = document.getElementById('password');
  const cPasswordInput = document.getElementById('cpassword');

  togglePassword.addEventListener('click', function () {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);


      // Toggle icon
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
  });


  toggleConfirmPassword.addEventListener("click", function(){

      const type = cPasswordInput.getAttribute("type") === 'password' ? 'text' : 'password';

      cPasswordInput.setAttribute('type', type);


      // Toggle icon
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');

  })


  passwordInput.addEventListener('input', () => {

    const weak = document.getElementById('weak');
    const average = document.getElementById('average');
    const strong = document.getElementById('strong');

     const value = passwordInput.value;

    // Reset indicators
    weak.style.color = 'gray';
    average.style.color = 'gray';
    strong.style.color = 'gray';

    const weakRegex = /^.{1,5}$/;
    const averageRegex = /^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]{6,}$/;
    const strongRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?])[a-zA-Z\d!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]{8,}$/;

    if (strongRegex.test(value)) {
      strong.style.backgroundColor = '#5cb85c';
      average.style.backgroundColor = '#5cb85c';
      weak.style.backgroundColor = '#5cb85c';

      strong.style.width = '100%'
      average.style.width = '100%'
      weak.style.width = '100%'
      
    } else if (averageRegex.test(value)) {
      average.style.backgroundColor = '#ffa204';
      weak.style.backgroundColor = '#ffa204';
      strong.style.backgroundColor = '#ffa204';
      
      strong.style.width = '0'
      average.style.width = '100%'
      weak.style.width = '100%'

    } else if (weakRegex.test(value)) {
      weak.style.backgroundColor = 'red';
      average.style.backgroundColor = 'red';
      strong.style.backgroundColor = 'red';
      
      weak.style.width = '100%'
      average.style.width = '0'
      strong.style.width = '0'

    } else if (value === ''){
      weak.style.width = '0'
      average.style.width = '0'
      strong.style.width = '0'
    }



  })

})




