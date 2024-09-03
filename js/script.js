document.addEventListener('DOMContentLoaded', function () {
  const steps = Array.from(document.querySelectorAll('.form-step'));
  const nextBtn = document.querySelectorAll('.btn-next');
  const prevBtn = document.querySelectorAll('.btn-prev');
  const progress = document.getElementById('progress');
  let formStepIndex = 0;

  nextBtn.forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      formStepIndex++;
      updateFormSteps();
      updateProgressBar();
    });
  });

  prevBtn.forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      formStepIndex--;
      updateFormSteps();
      updateProgressBar();
    });
  });

  function updateFormSteps() {
    steps.forEach((step, index) => {
      step.classList.toggle('form-step-active', index === formStepIndex);
      step.classList.toggle('hidden', index !== formStepIndex);
    });
  }

  function updateProgressBar() {
    progress.style.width = `${(formStepIndex) / (steps.length - 1) * 100}%`;
    const progressSteps = document.querySelectorAll('.progress-step');
    progressSteps.forEach((step, index) => {
      if (index <= formStepIndex) {
        step.classList.add('bg-forest-primary', 'text-white');
      } else {
        step.classList.remove('bg-forest-primary', 'text-white');
      }
    });
  }
  
  // Initial setup to display the first step and progress bar
  updateFormSteps();
  updateProgressBar();
});
