var Sys={},ua=navigator.userAgent.toLowerCase(),s;
(s=ua.match(/rv:([\d.]+)\) like gecko/))
    ?Sys.ie=s[1]
    :(s=ua.match(/msie ([\d.]+)/))
        ?Sys.ie=s[1]
        :(s=ua.match(/firefox\/([\d.]+)/))
            ?Sys.firefox=s[1]
            :(s=ua.match(/chrome\/([\d.]+)/))
                ?Sys.chrome=s[1]
                :(s=ua.match(/opera.([\d.]+)/))
                    ?Sys.opera=s[1]
                    :(s=ua.match(/version\/([\d.]+).*safari/))
                        ?Sys.safari=s[1]
                        :0,Sys.ie<9&&(location.href="killie.html");