import Stepper from 'bs-stepper'

export default {
    init() {
        return new Stepper(document.querySelector('#stepper2'), {
            linear: false,
            animation: true,
        });
    },
    finalize() {
      // scripts here fire after init() runs

    },
};

