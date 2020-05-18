$(document).ready(function () {
    
    
    $(".t").hover(function(){
        $(select).css({
            "color" : "white",
        "background-color": "#4d4f4c",
        })});
    $(".t").mouseleave(function(){
        $(".t").css({
            "color" : "#9cd1be",
        "background-color": "white",
        })});
    
        $(".Formations").click(function () {
            $(".Formations").css({
                "color" : "white",
              "background-color": "#4d4f4c",
            })
            $(".f").css({
                "color" : "#9cd1be",
                 "background-color": "white",
            })
            $(".textef").css({
                    "display" : "block",
            })
            $(".tf").css({
                "display" : "none",
            })
            $("body").css({
                "min-height": "130vh",
                "position": "relative",
            })}); 
        $(".Profil").click(function () {
            $(".Profil").css({
                "color" : "white",
              "background-color": "#4d4f4c",
            })
            $(".p").css({
                "color" : "#9cd1be",
                 "background-color": "white",
            });
            $(".textep").css({
                "display" : "block",
            });
            $(".tp").css({
                "display" : "none",
            })
            $("body").css({
                "min-height": "130vh",
                "position": "relative",
            })});
        $(".Expériences").click(function () {
                $(".Expériences").css({
                    "color" : "white",
                  "background-color": "#4d4f4c",
                })
                $(".e").css({
                    "color" : "#9cd1be",
            "background-color": "white",
                })
                $(".textee").css({
                    "display" : "block",
                });
                $(".te").css({
                    "display" : "none",
                })
                $("body").css({
                    "min-height": "130vh",
                    "position": "relative",
                })});

        $(".Compétences").click(function () {
                $(".Compétences").css({
                    "color" : "white",
                  "background-color": "#4d4f4c",
                })
                $(".c").css({
                    "color" : "#9cd1be",
            "background-color": "white",
                })
                $(".textec").css({
                    "display" : "block",
                });
                $(".tc").css({
                    "display" : "none",
                })
                $("body").css({
                    "min-height": "130vh",
                    "position": "relative",
                   
                })});

        $(".Intérets").click(function () {
                $(".Intérets").css({
                    "color" : "white",
                  "background-color": "#4d4f4c",
                })
                $(".o").css({
                    "color" : "#9cd1be",
            "background-color": "white",
        })
        $(".textei").css({
            "display" : "block",
        });
        $(".ti").css({
            "display" : "none",
        })
        $("body").css({
            "min-height": "160vh",
            "position": "relative",
        })});
    
        $("#bouton").hover(function(){
            $("#bouton").css({
                "color" : "white",
            "background-color": "#4d4f4c",
            })});
        $("#bouton").mouseleave(function(){
            $("#bouton").css({
                "color" : "#9cd1be",
            "background-color": "white",
            })});
    
            console.log("fes")
   
            $(".f").hover(function(){
                $(".f").css({
                    "color" : "white",
                "background-color": "#4d4f4c",
            })
            $(".f").mouseleave(function(){
                $(".f").css({
                    "color" : "#9cd1be",
                "background-color": "white",
            })});
            
})
})
