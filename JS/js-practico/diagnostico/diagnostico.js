function diagnosticar() {
    const sintomas = document.getElementsByName('sintoma[]');
    let enfermedad = '';
    let medicamentos = '';

    for (let i = 0; i < sintomas.length; i++) {
        if (sintomas[i].checked) {
            const valor = sintomas[i].value;
            if (valor === 'fiebre') {
                enfermedad = 'Resfriado Común';
                medicamentos = 'Ibuprofeno, Paracetamol';
            } else if (valor === 'tos') {
                enfermedad = 'Tos Ferina';
                medicamentos = 'Antibióticos, Codeína';
            } else if (valor === 'dolor-muscular') {
                enfermedad = 'Fibromialgia';
                medicamentos = 'Relajantes Musculares, Analgésicos';
            }
        }
    }

    if (enfermedad === '') {
        document.getElementById('resultado').innerHTML = 'Seleccione al menos un síntoma.';
    } else {
        document.getElementById('resultado').innerHTML = `Podría tener ${enfermedad}. Se recomienda tomar ${medicamentos}.`;
    }
}