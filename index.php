<?PHP
/* ============================================================== */
/*             Welcome to the io20 v1.0 source code               */
/*            Below are all the configuration settings            */
/*         Further down, you'll find the CSS and main code        */
/*            Everything you need should be up here...            */
/*              Unless your a GitHub code contributor!            */
/*   If uploading won't work, remember to turn it on in php.ini   */
/*     Todo: Security, themes, sanitation, platform testing       */
/* ============================================================== */

define("PEC_DOWNLOAD_ENABLE", true);             /*  disable in emergency bandwidth or other situations                            */
define("PEC_ACCESS_PASSWORD", true);             /*  Require a password to even load the page - use in corporate settings.         */
define("PEC_UPLOAD_ENABLED", false);             /*  change to true only AFTER setting your own password                           */
define("PEC_UPLOAD_PASSWORD_REQUIRED", true);    /*  Will PEC require a password? Set to false ONLY if you trust everyone...       */
define("PEC_UPLOAD_PASSWORD", "ecorp");          /*  Set this to something secure, but easy to remember. Or use "ecorp"...         */
define("PEC_UPLOAD_MAXSIZE_GB", 16);             /*  Set the largest allowed files size in gigabytes                               */
define("PEC_UPLOAD_MAXDIRSIZE_GB", 128);         /*  The largest your directory can get before uploads are disabled (recommended!) */
define("PEC_SHOW_FOLDER_SIZE_MODE", 1);          /*  0 = don't show, 1=windows, 2=nix. You MUST ENABLE COM in php.ini (Windows!)   */
define("PEC_SERVER_NAME", "My Server");    /*  Custom name for the header. How does "Timmy's Meme Stash"? sound?             */
define("PEC_SERVER_TITLE", "io20");              /*  Custom name for the tab.                                                      */
define("PEC_SERVER_THEME", "obsidian");          /*  Themes aren't complete yet. Why not contribute some to the code!?             */
define("PEC_SERVER_GFONT", "Open Sans");         /*  Choose a font provided by Google Fonts                                        */
define("PEC_SERVER_TEXT", "Welcome to my very own io20 file server!");         /*  Write a welcome message here that's displayed at the top of the page          */
define("PEC_SERVER_TEXTFILES_SCAN", false);      /*  Use local index.txt textfiles as messages  (local folders)                    */
define("PEC_SERVER_IMAGE_ENABLED", false);       /*  Enable a server banner/logo?                                                  */
define("PEC_SERVER_IMAGE", "serverimage.pngx");  /*  This is the header image and/or logo you want - NOT visible to visitors.      */
define("PEC_SERVER_LOG_FILE", "logfile.txt");    /*  All accesses, downloads, and uploads are logged here                          */
define("PEC_SERVER_LOG_ENABLE", "false");        /*  Enable logging to the logfile. Most don't need this feature.                  */
//many of these aren't used yet



?>

<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=<?PHP echo PEC_SERVER_GFONT; ?>');
/* todo encode/embed a font?*/
html{
	font-family: '<?PHP echo PEC_SERVER_GFONT; ?>';
	font-size: 24px;
	background-color: white;
	color: black;
}

body{
	color: black;
	margin:0px;
	margin-left: auto;
	margin-right: auto;
	width: 565px;
	background-color: rgba(0,0,0,0.0);
}

table{
	width: 100%;
	border-collapse: collapse;
}

tr:nth-child(even)
{
	background: rgba(0,50,0,0.06);
}

tr:hover{
	/*background-color: rgba(0,0,0,0.0);*/
}

h1
{
	font-size: 32px;
	color: rgba(0,0,0,1);
	margin-bottom: 1px;
	padding-bottom: 1px;
	margin-top:0px;
	margin-left: 11px;
}

p{
	font-size: 18px;
	color: black;
	margin:10px;
	margin-bottom: 10px;
	margin-top: 4px;
	margin-right: 55px;
}

a
{
	color: rgba(0,0,0,0.9);
}


div.header
{
	min-height: 70px;
	padding-bottom: 2px;
}

div.header, div.footer{
	background-color: rgba(55,0,55,0.09);
}

div.footer
{
	display: block;
	font-size:14px;
	color: black;
	padding:8px;
}

a.ubutton
{
	background-color: rgba(202,230,190,.85);
	color: #468847;



}
a.ubutton:hover
{
	background-color: rgba(0,200,0,.9);
	color: #468847;
}

a.fdl
{

	background-color: rgba(22,211,211,0.05);
	padding: 1px;
}
a.fdl:hover
{

	background-color: rgba(0,111,111,0.1);
	padding: 1px;
}

a:hover
{
	color: blue;
	background-color: rgb(233,233,233);
}

a:visited
{
	text-decoration: none;
}

a:link
{
	text-decoration: none;
}

span.zip, span.rar
{
	background:
	 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAgBJREFUeNp0kz9oFEEUxr+ZvY0Gg3qQAxECuq0gkjOGVAG5XisxEIU0CVgEAoKksFCLICgBGzEIFikSPAQtrHKlCBIDgWCh4BHQzkQSs4l7t/PHmTe7e3t/HHi8mzfffPd7szNMaw07Nh6zKZPOIRkbdTRmlrDzYhqD5QDH0D62za5Xl+9pFNKK0jg/MvvuPqR0Biu/sLYWoF6vozxRam31PKw/u/YonWYGBoRDxNBxTPMgCFAsFslAN09m+5nvO22ngVTgyvy7TgjssAZEl6sxzknbZWBa8PR/DPI1GAOr7UlghUqKTFutVhMCkdvfTsBzBp6SMaRwYXufvPLdrYlWXWtFWiF7GZiqEoLCHuLDVUY5rXG/Dz+/fnNajXKXgTaoKonRoS+oVCpEYufcfD672R7o1Qdq1uinehDESOPTjwuo1WqYvzWY1Q729nFm6CyOmk3StxkYes9iyiSGS5+JYGF5h+a0Jl2LB1FE+s6v4Dl8d5E2f48Rwd0bJ6impAchXHuHjUY3gTsDST3auHjqAxE8eX2I9ILJJE9vlzKDjCBq4rhWrYu0FY4Twdx1n2p2LTLoNu/uHpG+jeDPXwxwxuEXfIrh0x+JYPFtTHO7FoYh5Zk3A+/DCM/paqfP+elttmh+Xsq/2fnVwvrCTTHS8ZTBGDb7+zB356XGPwEGAIYKW8XzrdufAAAAAElFTkSuQmCC')
	no-repeat
	left center !important;
	padding: 0px 0px 0px 25px;
}

span.swf
{
	background:
	 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAjZJREFUeNqMUk1rE1EUPfORptFEDNhgBaGQXQv+hC5m14Ibl0K3jVkUSgNuii0FF3WhCxclq4KF0G23pRi6KFhUZIKIQoWClkIpIbEYJ+l8ee7rmzELER+ceW/u3HPuvWee8R7A+soKDMO4z+M4/r2aURR9jcIQcRzjy8EBDBH4NjGBxtxcZWt1tX7Jj74gihAySRJlua6Lrb29R0okDI+SuPEBeH4NWLLkhQiJgPCJS8Jid9lKBa1WCw9nZvBgebnK8GsKHCmBT0B8g4csYWpin/CIHvGLuHV6imazmc7xstF4wu2pnO1gqKp0MDo/j9v1ukr87Di42N+HbZpweJa2C4UCdl23k4iZgW61r3Gd7XY3N+GS1CZZOhqxbSVCoxUpCEODkB32gIGMzCrVJyeRKZdxk7jj+/hYrSrx0UzmqlwQKJEwCIykA7uvWx/J5zG+sICw3cYbCgy0D6qAZaXzW1cCZirgaePura2hODuL440N/NSxxFCTpETE4h4MCwx0lbe1GkDE2tSIiLU/pp5dRCx6EQyPwIQXNHIp0qRoiCwoLy6mAukIvv+nAybXjkul2o7jPH63vf2MV1URI30LZZdYsgzl5dAIu2NjcKenJarqSDUhqV1fLrBtaBGJJyP0zs9hv+Lj7skJcsWirSowwdQd/E1EmF6vZ3udDr4fHqpvOR5KPzqdbNqmiJAgAmKawKaBNi+U/AXJFY5wpWqOKF2cnXXzU1Pr+I8VeV5XOGLHbwEGAJZPA5r+wu15AAAAAElFTkSuQmCC')
	no-repeat
	left center !important;
	padding: 0px 0px 0px 25px;
}


 


span.bat, span.sh, span.sys
{
	background:
	 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAYdJREFUeNqkkztuwkAQhmfXs/Y6KHKoUJQuDcoZOENaGmpLRBwByRcgEg1KfA4uwC0oU5IqCDBCNsaQmbEcK1EaYKXx2t75/nnsrjqdTnDNwG63+0zz/YX8JxZF8RDH8Xue52eRxhjo9/sveDwe1X6/h8FgAPQuizxzaWzVO/ukaQ6O40CzeQdx/MZrCg+Hg6IsxDGKIpjNZrBYLID+A2fFtl4nsNnswFoERBd2uw0ww6ymh+YPjjIej6HT6UCr1aJoqdhyuYbtNqWULXjejZgxbiWgRYCjcQZhGMJ0OoX5fA69Xg/a7SfIsgJc16foPsFsVgSYYRYrAVacTCbQaDRkcTR6pW64EpHT5qYhGupBOf8rYK2VtLluYxi0AjNQwdxERKwFyPmnhArmzfD94A+MoLUju6SUqppcCnB0tizLZMHzbqXeGkSB6qHE/5cA154kSXVMaFe+JF2ttcClQCnieU4tsFqtPHYaDodnnURmmFVBEIRU/+MlF4FEPtS1t1HDleNbgAEAVRoIYd5OFw0AAAAASUVORK5CYII=')
	no-repeat
	left center !important;
	padding: 0px 0px 0px 25px;
}

 

span.folder
{
	background:
	  url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAVtJREFUeNqMkz1OAzEQhZ/tXURQWnooKCiogAtwAc6QBrq0SEgUiIqChoaCghNQUKSHGuUAJE0K2kj8LMlm1z/MeJNAknU2lqyR7Zm33xt7hXMOPNrXokFhC6uNHlU9HJw5RJMd67B92Hy6gDHLS5XC6+3x1WQ5FSAQCZ3D5fnSehHHRe68gLGQlr7uKgiElD53QYAsKLeCAEiAc0sJuNgaXVEfIKBNZU0Ooyt6EEU+d3x5cwKaCHSYIKpt4P2t43Npuc+3L/8LOMK3gSnp+riYG310aZuU3yghyGEDFix5//74xM7eLgZZNqH4EyB6xfgmYEFKRW+ssJikqc8vaSLjBgiMgtaFnZ/RaEow1wPjPZZNPjPjeNLbXLSQZlh3NvyQ+CwldI79/sDnzwh8DVGXQiKO4vIe0FmSJD6ePtZbicDdjMAwQ/f+5vy56j/utFsQAt3aGl54/SvAAHvn9T8uehsGAAAAAElFTkSuQmCC')
	no-repeat
	left center !important;
padding: 0px 0px 0px 25px;
}

span.exe
{
	background:
	   url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAnNJREFUeNqkU01oE1EQnt0kBS81CVYkUOghJGmhdWkO/hUNhUJswIMHvQQERQKiVgh48BJ6UK9GSyBIb15yURBCAgHrT0liW2iMlxJbrGkJ4tatqVXy0911viS7eO+DtzPM933z3s68EXRdp8MsKz6hUIhEUSSbzUaCIBCSWiyWMwyN9XhlVVULBtZut0nTNEqn090ExmLwLJuTbF+zQEqlUgmQw+HwLY5VGbvE9hPbvKER/xOf83g8V5LJZMLhcFxjobizI1O9/gsniogBAwdcQyfgSsFgEP4dJjyV5R/kcrlodbW0LkmSG0CpVFr3+Xzu3V2FBgaOUyQSucvhZ9lstnuDvb09ajQar6LRaKyvr49kWaaRkWG3pqmEDX9//zcBAwdcaMxf4FtcaLVaV2u12h8+bcNqtVKxWFybng4lsOEjBgwccKEx/p3Gx8fvr6ws6wsLb/RCIa+Xy2V9dHTsMXcC3SD4iAEDB1xooO10odlsWhqNJh0cqKSqGrfSykJrG63Cgo8YMHDAhcYsIld2iu0pBGZm7t2YmAgMbW19L83OPniJWCz26PLg4AlpcfHtZjz+ZL4jFISPlUolZ9wgxwm+cIVv+/2nhxRll7xen5ROv5OA1+s/aXv7KwHr7z9q507NcYJNs4hcVSS5Pjc3H5VlhV/kEcrlMt+q1Q3Cho8YMHDAhcYsIj8S7IuTk1MvlpfXdK93OG632x/m8591bPiIAQMHXGjMIvYSZZaWCkIg4N/iuXjOBbzpcBzjorU7L7FW244z9pev/oFbmsFcmEV0Op3mkBjTybMQYnO+l/89tzPdK545dIqidBMcZv0TYAC+s4eox8mF8wAAAABJRU5ErkJggg==')
	no-repeat
	left center !important;
	padding: 5px 0 5px 25px;
}

span.iso, span.img, span.bin, span.cue
{
	background:
	   url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAsxJREFUeNqkU0tPE1EU/mamT2c6tlihmJKiAQoFecjTqMGCJiaGYFASEsKWxDSRpbLhD7gFQ+KGhI0LF0DUmmiUBFgoSisQhBCNUmkpr7ZgH3RmWu8FbMqak5w793G+7557zjdMOp3GaUxFh/b2drAsC47jwDCMgbiDbFuJnz2OixD/Qy5bIr6vKApSqRTGx8ePCLLMLmoFZ1NZXUtxZWm9Ps+Qz2lVSCaTgZWl77MzUzMfwuHwRxK3ciKDYyu16HPuPWzocmlzDNaoBpAY5jArU46p8GZrS2FjQ9PVocFBo9/vHyPxyxTE0oGkJRoFTeuTttsui463auOAOkYOFNAngWM5qDkVzGazte9Rn0sUxVaKyRCQN1XcuWVz5jftWYUSPwSeRWF9MWoba1HluAyr5QJ0ai25iYFBMFqbbzidFJMhkGXZVuKoqAtxOqTLdiDezYV3bWnZ6XQ+o+71eJcFXoCUkJGMK6gsv1JHMdkEJilVbPEFL2I1UARFl4vh4eExn8/nok7nLMciti8hEUtCpz1joZhMEcmC9FBPMlRBTtO1AkEQJLvdflhdOicx+BvfBUPuVJTUESaLIBKPxjbP5+UVqEjVE4kD9Pb2to2Ojkr0vKenp80vz2Kx6DnEiAPSmmmTYjIEkiT9/jo36+3oeFCgVnO0qLDZbNUDAwPVVKnKVgwHb8PILTdg/ZIbc+9ZL8Vkd+Hbm9evpvcioYBGrSKtA2KJOPzbQfz49RPB1XVw+zyqPnXB8u56YP5FdJpiMgRElpFgcMPd3/94hHwDckqBpMhkXzmsQVIPxHlgazcWGHr6ZSS0ceCmmBNKJBsL8/PzXHd3d+J+Z+e15pbmCoMomiVZQmAnuP1ycmpxYtI9E4pGJoiQFv7jGPrGmpoaqncQnSMajZpIeg30vyB+7jhuh+qfyPozz/Mho9EIjUYDj8dzRHAa+yfAABjXVXsgn4pfAAAAAElFTkSuQmCC')
	no-repeat
	left center !important;
	padding: 5px 0 5px 25px;
}


 


span.png, span.jpeg, span.gif, span.jpg
{
	background:
	    url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAb5JREFUeNqkk79v00AUxz8+Xxz/dtKmVEkoqBlgaKUKOjEggcrA0IWViYG/CcSA1BUJMTGylgEJpIqtipAYkLpAkoY0TWLHvLMDYm1y0ruzT/p83/fe3bPyPGeVoVhx6BcPrVey7i/Jf9bZnP3Do29LCbx/1kGnmZxDKZ6+vYmyoGKLLYlpCqY8sSfhyp4cttOAnSakc7jX+I5hdSaTbdvsXQdHQyJAI4Czc/Aq5b8pc/8Cdluw14aLqTBzG8PqmZm0phUcc6u5TT1oFZlvb8JmVAqNBeisl04maSmqJ5qCTdNS4MOX13x0fR7fecKDnYPCsnFkbI9nsOZTAGbPF2dZpinYvw5Ou6fUkhpvhkcMhj/Y2rhBc22La3Edz5HUll/CTnm0y+nCwWzhYDJo8/O3ZvTL4V3/K57bJfADwiAkDEOiMCKJYhFusb3R5n5bBAw7XQh0mo9wHIdqtYrv+0RRSJJE1OuxhMBJQCxFCIIKqqqEuSxu6p+D/4d53qnc0Viqp9RYvhWjUU6vl+G6bpHk4O7CQX9YXuOnl8+v/JAMq7sDTg695Vqil3Mibw+pKzXTF1fkU2PCWrWd/wgwAP2DjcqWu28tAAAAAElFTkSuQmCC')
	no-repeat
	left center !important;
	padding: 5px 0 5px 25px;
}

span.mp4, span.avi, span.ogg, span.wmv
{
	background:
	   url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAjBJREFUeNqMU8uKE0EUPdXVr6Q7yYzzYIwSccaJCxeuxKX/EBIIhGzFjRtx48ZPcCEuJFmGgUBi/sEfEGYhMwZRcFQIIkmMSZvpVJW32k7o6MJpuH2rbp9z6/SpKqaUgmEYDwDsx3GR54MOKeVLMy7s93q9YqlUEs/bb0pCKioxKJ2gIGmgqMYY8Lh+pxdjI+KygUGF95QPwBSC8zAi6ga6h1apx9PxzyTWwPKlc7fbPaTMlZS0EqGZJkmIMEQwneHdySecnp5pLI+xxpqCcrn8kfKNYBJiMp1DLASYIZHLGfglA4RyQWrYEvuvgk6nc113F4rBcixktz3kL2dwLcNxczeFfD4LL+tHCmLsuoJKpaL1HaZzLjitrv95PJtDcgXT4uCmjcLBpSR2rQFvt9tXqtUqf/Xi4YkuDAYD0e/353/vH2NMYwuE/RLN43PQiL8XnzaO7wnJMJ4uIIRaETVOSoHGk7uvadrXNToH91ceHB0d7WklbsoBt0w4roW0Z6/C8x34mVSkNsaumchrtdp3naE4zgMFzgw4jh2FZZpaKkR0PhLYZINWq7WjPZlPZNQgGIUYfp3g29kQw8EIri2xtWVHvsVYnjTRrNfrPyhfJc/JE1LAGVzfhb+Rwo5voLgJzP5g7RhrrhSQQV6z2dygnCEqUkTcLWxiey8H16VVDROfiT0K9f1QmRjrrXaBtuYZjW9R3L7gbTymeEvcR8sGaSpkE57875EUE+JOfwswAK7793iUwCwFAAAAAElFTkSuQmCC')
	no-repeat
	left center !important;
	padding: 5px 0 5px 25px;
}

span.pdf
{
	background:
	   url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAl5JREFUeNqMUz1MU1EU/l55pRFb6Y+CViKExoTakcUwQe3qwGrSicUd0k1IQJKaYEOcOjdpYDBGHEgE00knDXkDXdTYRiIt1JQ2/aM/79Zzbl8fdTHe5Hv35Pbc73zfuafKFwDR1VUoivKYwjv490oJIb4LXcebzU15oPLnSSKBZDjsTaytxVv0Y5shBPRuF10CL03TkDg8fEqhQvjWZ7RYgJcPstludGMjnlNVnNtsKIyMoGC3I+9w4PfWFiqVCqrVKl6vr8ep+iO6d79PoKSB7g0KbMxGaBMuCQ1CjVAn3Dw9RSqVMn28Siaffd3ffy4tdOijE3i3WK243Wzi5/Q0RDYLYZyrpDMYDEo7DlL1XtMuTAuc0DKq6jMzaKfTGA6FpJKWoWiYrDEJNVpe6ui6YhI0ByQPzc2hEIvBubQE2/w8mgaJdnyMX7kcsqSKSfRO54rg0vB6bXERtyIRXF9YAOgF/Lu7mFhZkSQ+nw8ejwderxdDPQJLn0BtGDIfbm8jv7eH84MDFI+OUDk7k8/JBUqlkvRfr9dxd3wcnUECrsB4NzkpD7pGU4URswW32y0JXC4XrNSLzqAFSojxU5UJ3NqisZcM2MJhlMtl5PN5qURaaLevFFCl5czY2PLbYDDyeWfnxY9isafEmMKJ0VFqiYCgmMGl/7Lw0e/Hp0CAT+UjZTIZUy57vud09uZViJ5kyhq0oH6YmqJnqJn/i9DsrCTgatwD3i39oScSvtmo1VSToHxhDpXNnG+qwpWYSDF2JhE8TAS6Y+aq9V51TjqxBwJR/McikpN+/EeAAQBawCQKtZUgAAAAAABJRU5ErkJggg==')
	no-repeat
	left center !important;
	padding: 5px 0 5px 25px;
}

span.txt
{
	background:
	   url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAcFJREFUeNqMUs1qwkAQnsSk6aGinqQ/lKIWiuLJN7C99tq+Qt9CEYQ+QKGeBW+l9yL01LPm0FtLFTyrFKMRs1k7M2ZDSkJpYDKzu998883satvtFui7aTav0R3C39+rlPJT+j48t9u8YagTPDjqNhqdDR56ZFKCj+SqgG3b0O337zDU0D5Unh4S+L4mKcnz2DbrNbjLJTiOA4vFgv1Tq9VB3CXCz2MEPhIQtY5/M5WCfdOEPcMAQ9dBw73ZbAYPvR7Uy+XH9+HwVuUZEQU6Jb8NBiw7m83CarWCi1IJQAio1+u8n06n4cW25zECQQqQoIQJ1AqBc7kcK9kBBAjcV9gYgS8EtzAajbj6dDplkq9gkJlMBlzXhWq1ytgkAm6hWCyG1ZUSZbROIYaw8RZwk2jH43GYqJSQpzXN5DifZ2wSAc9AKYjOIRqbeCsisQXP06MzoGujxGh1y7LgDBUQNrkFVFAoFHhN1SjxBIdHRJJUoWkBNrmFQIGSS1VPUQGgbAiukAad2AI+W46varXdDGjy9MDQc7mARItgfxF8z+eWiqkVqkREWuCJRNKzRotiQ4Kl40wOKpV7+MeHJBMV/wgwAEvJNZRl3m/PAAAAAElFTkSuQmCC')
	no-repeat
	left center !important;
	padding: 5px 0 5px 25px;
}


span.mp3, span.wav, span.mid, span.fm, span.flac
{
	background:
	   url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAkBJREFUeNp8k89rE0EUx7+zmU02m6RJbRtDbSNWCgW9iH+AFeK9F/Nn+Cf04M1bCwUv3oshV2+FelJoaRGhIFIJxfwyiTHdJptfOzu+SbL5JfXBZ2Z4++Y7772ZZVJKpI8wb3I0Z4gs8YGwpwMyqeGs4RaLxQDTRJpzZBhDlVzviZeEOR13q0A2e4bz8xzq9T/QddfUdaRJSGXUIj56cVwNti1nNmtD2ZV8vr5DUBba83g8xgksLUXBmPbMi2WqB0/e9ucEmOx0mqxU+uG5lokdIk28SKWeqh6wcQbC6aNa02YyYMyA3x9Hr1dRrhrxThGNRiDEuMlDgcWogBnScXkpJtcwCFkhoRatWwOfYYSRSGygXFZxvomAsnCYYWsrgFJZDja7rnfIJqzrL+A8Ts2Mo1gUox7NCSgLBhmS6wx2WwlM/AuRxygUJJrNoShjc9copbvtCudE0sC5lBEqM7oAeATYLzy430MoxAcEg5NzByurXjlc30gk7izr6HT6qJSdnHdMu2kNszNcJNcc2F1j1J8pgVq5EIosRmA1bMKiegP7Pq5TGQLdtg1/wBgE69xFzHCoBj5bQuN3Zffr5083F2enhWox/0oIcaD8arMyEtp2nN4JXbcjRU8y2RczGbhC7EnX3VNPQ/cPT2tZDdxc10fvQjvcfPQwcfdeCHazi59X1Ryw+u8tTNvV94vxmmlaKJFcQ/NbCZViET6ff/+/AvTzwIyYqJZKnmv39PjoNee65TeCb+KryQPvw18BBgBBn+VWYe4RtQAAAABJRU5ErkJggg==')
	no-repeat
	left center !important;
	padding: 5px 0 5px 25px;
}


 
 
 



span.default
{
	background:
	  url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAV9JREFUeNqMkrFOwzAQhs9OAgzkAWBnad8izKzwCrxFq0qVeAAkOlfqhthRJV6hGdhg654IJRFVYzvcXWMrEDfipPNZ5/Pn+22LpmmA7HY6vcFwAcP2Zoz5NFrDy3zOidCu4MLlcjJZ7HGxJjcGNMLtAWmawnK9vsepQP+w+6QDaC0Mbapr9v1uB99VBWVZQlEUHJ9nswXWXWP5VQ+gEUBoiWMUBHAWRXAShhBKCQJzWZbB42oFyWj09L7Z3Nl9YacDSZslY4AhzpSCJElYThzH8JqmeQ+gqIMOwAdRKNHW9gBaKSeha38hdAjV+gAHCagZ2pN8kOAAkH0JmHQdDEACjOoIgO+A74Hfxw8JMK+8EuradWDs+3ogLAFr/RKoA3yqIYhoa/0SbAcDEMp7JeC35bm9g2MQ0an9BfjK81PXZvuh6OeJNjKUvjV6t9YBqrLcno/HD/APQ8jWzn8EGACxU8j1qPzZewAAAABJRU5ErkJggg==')
	no-repeat
	left center;
	padding: 5px 0 5px 25px;
}

a.back
{
	font-size: 12px;
	color: rgba(255,0,0,0.8);
	cursor: pointer;
	padding: 4px;
}

<?PHP
if(PEC_SERVER_THEME == "obsidian") //this is how theme loading will work
{
echo <<<EOF



EOF;
}
?>


</style>
<link rel="shortcut icon" type="image/png" href=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAZdEVYdFNvZnR3YXJlAHBhaW50Lm5ldCA0LjAuMTM0A1t6AAAAYUlEQVQ4T81N2wkAIQzr/hO4123gJLZUYuxV6MF9GAKmeaA8vX3iGohMrSIAHUv5cMbGaYDgzkEAOpbyUeH2A/B2FNP0J9BjlFj/MVhZZZCWWG8DboQzGajFSB0z/amytwGsycVR0eojuAAAAABJRU5ErkJggg=="/>
<title><?PHP echo PEC_SERVER_TITLE; ?></title>

<script>
function goBack() {
    window.history.back();
}
</script> 
</head>



<body>
<div class='header'>
<h1><?PHP echo PEC_SERVER_NAME ?></h1>
<p><?PHP echo PEC_SERVER_TEXT ?></p>
<img style="position: absolute; right: 40px; top:-3px;" src='<?PHP if(PEC_SERVER_IMAGE_ENABLED) {echo PEC_SERVER_IMAGE;} ?>'>
</div>





<?php
$mode = 1;
$getdir = NULL;

if( isset($_GET["mode"]) )
{
	if($_GET["mode"] == "upload") $mode=2;
	if($_GET["mode"] == "finish_upload") $mode=3;
}

function reduce_bytes($bytes)
{

	if($bytes >= 2147483647 || $bytes < 0) return "BIG!";

	if($bytes > 1000 && $bytes < 1000000)
	{
		$bytes /= 1000;
		$bytes = (int) $bytes;
		$bytes = $bytes." KB";
	}
	else if($bytes > 999999 && $bytes < 1000000000)
	{
		$bytes /= 1000000;
		$bytes = (int) $bytes;
		$bytes = $bytes." MB";
	}
	else if ($bytes > 999999999)
	{
		$bytes /= 1000000000;
		$bytes = (int) $bytes;
		$bytes = $bytes." GB";
	}
	else
	{
		$bytes = $bytes." B";
	}

		return $bytes;
}

//sanitize GET dir. No dots, symbols, forward slashes, double slashes
if($mode == 1)
{
	if(isset($_GET["dir"]))
	{
		$dir = getcwd()."\\".$_GET["dir"];
		echo "<a class='back' onclick='goBack()'>&lt;&lt;Back </a><br>";
		$getdir = $_GET["dir"]."\\";
	}
	else
	{
		$dir = getcwd();
		$getdir = "";
	}


	// Sort in descending order
	$b = scandir($dir,2);
	echo "<table>";

	$had_folders = false;
	for($x=0; $x < count($b); $x++) //folders
	{
		

		if($b[$x] == "..") continue;
		if($b[$x] == ".") continue;
		if($b[$x] == "index.php") continue;
		if($b[$x] == PEC_SERVER_IMAGE) continue;
		if($b[$x] == PEC_SERVER_LOG_FILE) continue;
		
		
		if( is_dir( $getdir.$b[$x] ) )
		{
			$fos = NULL;

			if(PEC_SHOW_FOLDER_SIZE_MODE == 1)
			{
				$fos = getcwd()."\\".$getdir.$b[$x]; //NEED TO ENABLE COM IN PHP.INI FOR FOLDER SIZES ON WINDOWS

				if( !class_exists("COM") )
				{
					die ("COM is not enabled. Turn off PEC_SHOW_FOLDER_SIZE_MODE until you enable it. You need to add 'extension=php_com_dotnet.dll' to php.ini (do a control+f to find the extension declarations) and restart Apache to make this feature work.");
				}
				else
				{
					$folderchecker = new COM ( 'scripting.filesystemobject' );

					if ( is_object ($folderchecker) )
					{
						$ref = $folderchecker->getfolder ( $fos );
						$fos = reduce_bytes($ref->size);
						$folderchecker = NULL;
					}
					else
					{
						$fos = "0 B";
					}
				}

			}

			
			
			echo "<tr>
			<td colspan=1><a href='?dir=$getdir$b[$x]'><span class=folder></span>".$b[$x]."</a></td>
			<td colspan=2>{$fos}</td>
			</tr>";

			if(!$had_folders) $had_folders = true;
		}

		//echo "<br>";
	}

	$had_files = false;
	for($x=0; $x < count($b); $x++) //files
	{

		

		if($b[$x] == "..") continue;
		if($b[$x] == ".") continue;
		if($b[$x] == "index.php") continue;
		if($b[$x] == PEC_SERVER_IMAGE) continue;
		if($b[$x] == PEC_SERVER_LOG_FILE) continue;
		
		
		if(!	is_dir( $getdir.$b[$x] ) )
		{
			$exclass = pathinfo($b[$x]);
			$exclass = $exclass["extension"];
			//echo $exclass;
			
			$fs = filesize( $getdir.$b[$x] );
			$fs = reduce_bytes($fs);
			
			echo "<tr><td><a href='{$getdir}{$b[$x]}'><span class='$exclass default'></span>".$b[$x]."</a></td> <td>{$fs}</td><td><a class='fdl' href='{$getdir}{$b[$x]}' download><img src=' data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAgpJREFUeNqMU81rE0EU/802u02bINTWj+LBgnopenH+AS+9Sa968VAQes3Zo39BjkYUKS6KCBYlCFJEsZWCOOjNg9qrtk2iyTaZzX7M+GbtbnZLBB+8fbvzfu8372uZ1hpXHuwhL4yxBhmeOxKEW81j3q6cTGzJPFQc44jwa0vzPAwB2waebPzAvyQh6He7KFcqBYfvK3ieQrVqIY6ioq/fp+f8iEAeHCCi6/IkQRBDygiOU0p8+eBwOCxmYMSApOfBLpczgsGASMssIwh9H/GRckv5D+PUUsKamKDgAPv7HSjlIAqCpE9KqfE9oA43yJt0PSaQqbnV6qDdbmNqaiZN+WMaRHhBZjUjoIBNOuQr1y/zb993obTCr66EZgy/ez744gynaePEXAXN1zuCxryZklmHjC6lWb+7ti1mTx3D158D7EoFaU9iz9fYafmoHK9i/eUXYXAGXyDISMKw/ujxB7F48Qw8ZzrThQun0XzxWRh/Pjgj6HU6SZ1pJs/dd+L8uTn0JqdxdmEWG0/fZzcbnMEXmtijZlFdKDkObMdxzXq/WXtVu3TjKt962DQ110ldSTtgJmL8Y8donEYty3KZZeHT/Wc1Oq5rpdxxIxwR0Bh17udJlmW0MLVDHcmYMfLlWzc5bS5CYqLfAMPUksr4rw3oTJEOGveKGdCNYv32Hfy3MCbS1z8CDADD9UVYgGn97QAAAABJRU5ErkJggg=='></a></td> </tr>";
			if(!$had_files) $had_files = true;
		}
		//echo "<br>";
	}

	echo "</table>";

	if(!$had_files && !$had_folders){
		echo "While not at all presidential, I must point out that this io20 directory had nothing in it and was forced to close. Sad!";
	}
}
else if ($mode == 2)
{

	$_udir = $_GET["udir"];
	$_udir = str_replace('\\', '/', $_udir);
	$uploadingto = $_udir;
	if (!$_udir) $uploadingto = "home directory";

	echo "Max size is 1.8GB due to unavoidable limitations in 32-bit Apache servers. Break your archives into parts if you need to upload bigger collections.<br><br>Uploading to $uploadingto ...";

	echo "<form enctype=\"multipart/form-data\" action=\"index.php?mode=finish_upload&udir={$_udir}\" method=\"POST\">
    <input type=\"file\" name=\"uploaded_file\"></input> <input type=\"submit\" value=\"Upload\"></input>
    <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"10000000000\">
	</form>";

	echo "<br><a class='' href=index.php>Home</a><br><br>";
}
else if($mode == 3)
{
	$_udir = $_GET["udir"];
	$_udir = str_replace('\\', '/', $_udir);

	ini_set('display_errors',1);
	error_reporting(E_ALL);
	if(!empty($_FILES['uploaded_file']))
  	{
	    $path = $_udir; // ISOs/    uploads/
	    $path = $path . basename( $_FILES['uploaded_file']['name']);

	    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path))
	    {
	      echo basename( "<span style='color:green;'>".$_FILES['uploaded_file']['name'])."</span> uploaded!";
	    }
	    else
	    {
	        echo "Not uploaded because of error #".$_FILES["file"]["error"];
	    }
  }
  echo "<br><a class='' href=index.php>Home</a><br><br>";
}


echo "<div class='footer'><a class='ubutton' href=\"?mode=upload&udir={$getdir}\">Upload to here</a> | <a href=\"http://github.com/Tylemagne/IO20\">io20 v0.9 (alpha)</a> | <a href='http://p.yusukekamiyamane.com/'>Fugue Icons</a></div>";
?>
</body></html>