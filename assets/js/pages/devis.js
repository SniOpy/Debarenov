const clientType = document.getElementById('client-type');
const companyField = document.getElementById('company-field');

if (clientType) {
  clientType.addEventListener('change', () => {
    if (clientType.value === 'professionnel') {
      companyField.classList.remove('hidden');
    } else {
      companyField.classList.add('hidden');
    }
  });
}
