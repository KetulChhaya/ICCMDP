<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="./css/about-us.css">
        <title>ICCMDP | About Us</title>

        <?php require_once 'header.php'; ?>
        <div class="page-container-header h1 text-center bold-text">
            About us
        </div>

        <div class="page-container">
            <div class="section">
                <div class="section-heading">
                    <img src="./assets/images/atom.svg" />
                    <h2>About ICCMDP</h2>
                </div>
                <div class="section-info" style='margin-top: 20px'>
                    <h5 class="wh-space-normal">
                    The research area of materials and devices has grown tremendously in recent times, thanks to the innovative synthesis & characterization methods and high-speed computational power that has opened up doors for many more areas of interdisciplinary fields. Physicists, chemists and biologists are contributing tremendously in these areas through collaborative work. To encourage and invite such an interdisciplinary collaborative work, Department of Physics, Pandit Deendayal Petroleum University, Gandhinagar is organizing three days International Conference on Condensed Matter and Device Physics,  9-11 September, 2021
                        <br>
                        <br>
                        The idea of the conference is obvious to provide a platform to young researchers to showcase their expertise and have an opportunity to share their interests to all the stakeholders in the field.  In the conference there will be many brainstorming sessions on opportunities in current research scenarios followed by the discussions. Exhibitors will also be given space to display the equipments from some sectors of materials science and engineering communities. It is anticipated that there will be more than 100 delegates from country would attend the conference to present roughly 120 abstracts. Organizers will try to publish the proceedings of the conference in a reputed journal
                    </h5>
                </div>
            </div>
            <div class="section">
                <div class="section-heading">
                    <i class="fas fa-landmark"></i>
                    <h2>About PDPU</h2>
                </div>
                <div class="section-info" style='margin-top: 20px'>
                    <h5 class="wh-space-normal">
                    Pandit Deendayal Petroleum University is located in Gandhinagar, Gujarat, India. It is recognized by UGC and accredited by NAAC, A Grade. Since its establishment in 2007, the University has enlarged its scope by offering diversified courses in a very short duration through School of Technology, School of Liberal Studies, School of Petroleum Technology, and School of Petroleum Management. For the development of its faculties and staff, the University endeavors for various collaborative programs. In 2018, the Central Government of India has granted autonomy to PDPU
                    </h5>
                </div>
            </div>
            <div id="corecommittee" class="section">
                <br><br><br>
                <div class="section-heading">
                    <i class="fas fa-users"></i>
                    <h2>Our Committee</h2>
                </div>
                <h3><strong><u>International Advisory Committee</u></strong></h3>
                <div class="person-card-con international-committee">
                    
                </div>

                <h3><strong><u>National Advisory Committee</u></strong></h3>
                <div class="person-card-con national-committee">
                   
                </div>
                <h3><strong><u>Local Organizing Committee</u></strong></h3>
                <div class="person-card-con local-committee">
                    
                </div>
                
            </div>
            <script>

                function readTextFile(file, callback) {
                    var rawFile = new XMLHttpRequest();
                    rawFile.overrideMimeType("application/json");
                    rawFile.open("GET", file, true);
                    rawFile.onreadystatechange = function() {
                        if (rawFile.readyState === 4 && rawFile.status == "200") {
                            callback(rawFile.responseText);
                        }
                    }
                    rawFile.send(null);
                }

                //usage:
                readTextFile("./js/members.json", (text) => {
                    var data = JSON.parse(text);
                    let international = "";
                    let national = "";
                    let local = "";
                    let i=0;
                    let j=0;
                    let k=0;
                    console.log(data);
                    for(i=0; i<data.members[0].international.length; i++) {
                        international += `<div class="person-card" style="max-width:300px">
                                <h4 class="bold-text">${data.members[0].international[i].name}</h4>
                                <h5>${data.members[0].international[i].affiliation}</h5>
                            </div>`;
                    }

                    for(j=0; j<data.members[1].national.length; j++) {
                        national += `<div class="person-card" style="max-width:300px">
                                <h4 class="bold-text">${data.members[1].national[j].name}</h4>
                                <h5>${data.members[1].national[j].affiliation}</h5>
                            </div>`;
                    }

                    for(k=0; k<data.members[2].local.length; k++) {
                        local += `<div class="person-card" style="max-width:300px">
                                <h4 class="bold-text">${data.members[2].local[k].name}</h4>
                                <h5>${data.members[2].local[k].affiliation}</h5>
                            </div>`;
                    }

                    $('.international-committee').append(international);
                    $('.national-committee').append(national);
                    $('.local-committee').append(local);
                }); 

            </script>
            
            <?php require_once 'locate-us.php' ?>
        </div>


        <?php require_once 'footer.php'; ?>

        <script src="./js/sidebar.js"></script>
        <script src="./js/lightbox.min.js"></script>
        
    
        