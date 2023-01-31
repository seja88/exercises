import { ProgressBar } from './ProgressBar';

// @TODO no.1
//    create new instance of ProgressBar.
//    Explore ProgressBar class, but the constructor does not need any parameter.
//    Take a body element (document.body) and append progress bar element to it.
//    Progress bar element was created in the constructor of PB
//    and it is available as a property "element" of the object you created.
//
//    code here:
const progressBar1 = new ProgressBar();
document.body.appendChild(progressBar1.element);

const progressBar2 = new ProgressBar(5);
document.body.appendChild(progressBar2.element);

const progressBar3 = new ProgressBar(10);
document.body.appendChild(progressBar3.element);
// @TODO no.2 once you have done TODO no.1 and you can see the progress bar,
//    fix missing icon on plus button
