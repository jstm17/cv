$(document).ready(function () {


    // Animations de la 1ere page
    $(".trigger").hover(function () {
        $(this).addClass("triggerhover")
        $(this).removeClass("triggermouseout")
        $(".nom").addClass("nomhover")

    })
    $(".trigger").mouseout(function () {
        $(this).removeClass("triggerhover")
        $(this).addClass("triggermouseout")
        $(".nom").removeClass("nomhover")
    })
    $(".trigger").mousedown(function () {
        $(this).addClass("casemousedown")
    })

    var apparition = function(){
        $(".case").addClass("caseapparition")
    }
    $(".trigger").click(function () {
        $(this).fadeOut(2000);
        $(".nom").fadeOut(2000);
        $(".page2").fadeIn(2000)
        $(".dot").fadeOut(3000);
        $(".page1").fadeOut(2000);
        setTimeout(apparition, 2000);
    })

    // Animations des 6 cases
    $(".case").hover(function () {
        $(this).addClass("casehover")
        $(this).removeClass("casemouseout caseapparition")
        $(".home").removeClass("homehover, homemouseout")
    })
    $(".case").mouseout(function () {
        $(this).removeClass("casehover")
        $(this).addClass("casemouseout")
    })
    $(".case").mousedown(function () {
        $(this).addClass("casemousedown casedisparition2")
        $(this).removeClass("casemouseup")
        $(".case").removeClass("caseapparition casehover casemouseout")
        $(".case").addClass("casedisparition")
        $(".home, .profil, .infos,.formations,.formation1,.experiences,.experience1,.competences,.formulaire,.interets,.interet1,.interet2,.interet3 ,.interet4 ,.interet5").addClass("homeapparition")
        $(".home").removeClass("homedisparition")
        $(".profil, .infos,.formations,.formation1,.experiences,.experience1,.competences,.formulaire,.interets,.interet1,.interet2,.interet3 ,.interet4 ,.interet5").removeClass("profildisparition")
    })

    $(".case").mouseup(function () {
        $(this).removeClass("casemousedown")
        $(this).addClass("casemouseup")
    })

    //Animations lorsqu'on clique sur la case profil
    $(".case1").click(function () {
        $(".page2").fadeOut(500)
        $(".pageprofil").fadeIn(500)
        $(".adresse, .infosphoto").removeClass("logodisparition")
        $(".adresse, .infosphoto").addClass("logoapparition")
    })

    //Animations lorsqu'on clique sur la case formations
    $(".case2").click(function () {
        $(".page2").fadeOut(500)
        $(".pageformations").fadeIn(500)
    })

    //Animations lorsqu'on clique sur la case experiences
    $(".case3").click(function () {
        $(".page2").fadeOut(500)
        $(".pageexperiences").fadeIn(500)
    })

    //Animations lorsqu'on clique sur la case compétences
    $(".case4").click(function () {
        $(".page2").fadeOut(500)
        $(".pagecompetences").fadeIn(500)
        $(".modelecontour,.competence1,.anglaiscontour").removeClass("contourdisparition")
        $(".modelecontour,.competence1,.anglaiscontour").addClass("contourapparition")
        $(".competencetitre1").removeClass("logodisparition")
        $(".competencetitre1").addClass("logoapparition")
    })

    //Animations lorsqu'on clique sur la case intérêts
    $(".case5").click(function () {
        $(".page2").fadeOut(500)
        $(".pageinterets").fadeIn(500)
    })

    // Animations pour la case intérêts dessin
    $(".interet1,.interettexte1").hover(function () {
        $(".interet1").addClass("interethover")
        $(".interet1").removeClass("interetmouseout")
        $(".interettexte1").addClass("interettextehover")
        $(".interettexte1").removeClass("interettextemouseout")
        $(".interetsite").addClass("interetsitehover")
        $(".interetsite").removeClass("interetsitemouseout")
    })
    $(".interet1").mouseout(function () {
        $(".interet1").removeClass("interethover")
        $(".interet1").addClass("interetmouseout")
        $(".interettexte1").removeClass("interettextehover")
        $(".interettexte1").addClass("interettextemouseout")
        $(".interetsite").addClass("interetsitehover")
        $(".interetsite").remove("interetsitemouseout")
    })

    // Animations pour la case intérêts séries TV
    $(".interet2,.interettexte2").hover(function () {
        $(".interet2").addClass("interet2hover")
        $(".interet2").removeClass("interet2mouseout")
        $(".interettexte2").addClass("interettextehover")
        $(".interettexte2").removeClass("interettextemouseout")
    })
    $(".interet2").mouseout(function () {
        $(".interet2").removeClass("interet2hover")
        $(".interet2").addClass("interet2mouseout")
        $(".interettexte2").removeClass("interettextehover")
        $(".interettexte2").addClass("interettextemouseout")
    })

    // Animations pour la case intérêts musique
    $(".interet3,.interettexte3").hover(function () {
        $(".interet3").addClass("interet3hover")
        $(".interet3").removeClass("interet3mouseout")
        $(".interettexte3").addClass("interettextehover")
        $(".interettexte3").removeClass("interettextemouseout")
    })
    $(".interet3").mouseout(function () {
        $(".interet3").removeClass("interet3hover")
        $(".interet3").addClass("interet3mouseout")
        $(".interettexte3").removeClass("interettextehover")
        $(".interettexte3").addClass("interettextemouseout")
    })

    // Animations pour la case intérêts jeux vidéo
    $(".interet4,.interettexte4").hover(function () {
        $(".interet4").addClass("interet4hover")
        $(".interet4").removeClass("interet4mouseout")
        $(".interettexte4").addClass("interettextehover")
        $(".interettexte4").removeClass("interettextemouseout")
    })
    $(".interet4").mouseout(function () {
        $(".interet4").removeClass("interet4hover")
        $(".interet4").addClass("interet4mouseout")
        $(".interettexte4").removeClass("interettextehover")
        $(".interettexte4").addClass("interettextemouseout")
    })

    // Animations pour la case intérêts voyages
    $(".interet5,.interettexte5").hover(function () {
        $(".interet5").addClass("interet5hover")
        $(".interet5").removeClass("interet5mouseout")
        $(".interettexte5").addClass("interettextehover")
        $(".interettexte5").removeClass("interettextemouseout")
    })
    $(".interet5").mouseout(function () {
        $(".interet5").removeClass("interet5hover")
        $(".interet5").addClass("interet5mouseout")
        $(".interettexte5").removeClass("interettextehover")
        $(".interettexte5").addClass("interettextemouseout")
    })

    //Animations lorsqu'on clique sur la case formulaire
    $(".case6").click(function () {
        $(".page2").fadeOut(500)
        $(".pageformulaire").fadeIn(500)
        $(".formulairenom").addClass("formulaireapparition")
        $(".formulairenom").removeClass("formulairedisparition inputmouseup")
        $(".envoyer").addClass("envoyerapparition")
    })

    // Animations des inputs
    $(".formulairenom").focusin(function () {
        $(this).addClass("inputmousedown")
        $(this).removeClass("inputmouseup")
    })
    $(".formulairenom").focusout(function () {
        $(this).removeClass("inputmousedown")
        $(this).addClass("inputmouseup ")
    })

    //  Animations du bouton envoyer 
    $(".envoyer").hover(function () {
        $(this).addClass("envoyerhover")
        $(this).removeClass("envoyermouseout envoyerapparition")
    })
    $(".envoyer").mouseout(function () {
        $(this).removeClass("envoyerhover envoyermouseup envoyermousedown")
        $(this).addClass("envoyermouseout")
    })
    $(".envoyer").mousedown(function () {
        $(this).addClass("envoyermousedown")
        $(this).removeClass("envoyermouseup")
    })
    $(".envoyer").mouseup(function () {
        $(this).removeClass("envoyermousedown")
        $(this).addClass("envoyermouseup")
    })

    // Animations pour le bouton home
    $(".home").hover(function () {
        $(this).addClass("homehover")
        $(this).removeClass("homemouseout homeapparition")
        $(".case").removeClass("casehover, casemouseout")
    })
    $(".home").mouseout(function () {
        $(this).removeClass("homehover")
        $(this).addClass("homemouseout")
    })
    $(".home").mousedown(function () {
        $(".page2").fadeIn(1500)
        $(".pageprofil,.pageformations,.pageexperiences,.pagecompetences,.pageinterets,.pageformulaire").fadeOut(500)
        $(".case").addClass("caseapparition")
        $(".case").removeClass("casedisparition casedisparition2 casemousedown2")
        $(this).addClass("homemousedown")
        $(".home, .profil, .infos,.formations,.formation1,.experiences,.experience1,.competences,.formulaire,.interets,.interet1,.interet2,.interet3 ,.interet4 ,.interet5").removeClass("homeapparition")
        $(".home").addClass("homedisparition")
        $(".profil, .infos,.formations,.formation1,.experiences,.experience1,.competences,.formulaire,.interets,.interet1,.interet2,.interet3 ,.interet4 ,.interet5").addClass("profildisparition")
        $(".adresse, .infosphoto,.competencetitre1").addClass("logodisparition")
        $(".adresse, .infosphoto,.competencetitre1").removeClass("logoapparition")
        $(".modelecontour,.anglaiscontour,.competence1").addClass("contourdisparition")
        $(".modelecontour,.anglaiscontour,.competence1").removeClass("contourapparition")
        $(".formulairenom").removeClass("formulaireapparition inputmouseup")
        $(".formulairenom").addClass("formulairedisparition")
        $(".interet1,.interet2,.interet3 ,.interet4 ,.interet5").removeClass("interethover interetmouseout interet2hover interet2mouseout interet3hover interet3mouseout interet4hover interet4mouseout interet5hover interet5mouseout")
    })
    $(".home").mouseup(function () {
        $(this).removeClass("homemousedown")
    })

})