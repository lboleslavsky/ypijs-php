function g(b){var a={u:[],V:[]};a.name=b.Name;a.Z=b.Alias;a.speed=b.Speed;a.fa=b.IdleInterval;a.message=void 0;a.T=1;a.lb=void 0;a.v="#"+b.BubbleId;a.S=b.onbubble;a.la=b.onplay;a.pa=b.onstop;a.ka=b.onmute;a.sb=b.onaction;a.na=b.onseek;a.oa=b.onsetter;a.I=b.onfinish;a.P=b.behavior;a.C=!1;a.e=0;a.F=0;a.Wa=function(b){a.V=b.split("\\n");a.e=0};a.Va=function(b){a.qa=b};a.getParams=function(){return a.qa};a.getName=function(){return a.name};a.getAlias=function(){return a.Z};a.ea=function(){return a.e<
a.V.length};a.Oa=function(){if(a.ea())return a.e+=1,a.V[a.e-1]};a.registerCustomAction=function(b,f){a.u[b]=f};a.update=function(b,f){a.Za();return void 0==a.u[b]||void 0==a.u[b].va||a.u[b].ya!=f.ya?!1:a.u[b].va(void 0,f)};a.Za=function(){a.T=1;void 0!=a.G&&clearTimeout(a.G)};a.s=function(b,f){void 0!=f&&(a.first=f.Y);a.F=0;a.message=b;void 0!=a.G&&clearTimeout(a.G);a.C&&(clearTimeout(a.timeout),a.C=!1);a.Wa(b);a.ta()};a.ta=function(){retVal=!0;void 0!=a.la&&k.B&&(retVal=!a.la(a));retVal&&a.show()};
a.show=function(){a.Ba(a.Oa())};a.skip=function(){clearTimeout(a.timeout);a.mute()};a.repeat=function(){a.s(a.message);a.T++};a.about=function(){temp=a.message;a.s("Hi, my name is "+a.Z+".");a.message=temp};a.getTextId=function(){return a.F};a.Ba=function(b){void 0!=a.S?(px={},px.Text=b,px.Element=$(a.v),a.S(px)):$(a.v).text(b);retVal=a.C=!0;void 0!=a.na&&k.B&&(retVal=!a.na(a));retVal&&(a.timeout=setTimeout(function(){a.C&&a.mute()},b.length*a.speed));$(a.v).fadeIn("fast",function(){a.first&&(k.Xa(a.qa),
a.first=!1);k.update(a)})};a.isSpeaking=function(){return a.C};a.mute=function(){void 0!=a.ka&&a.ka(a);$(a.v).fadeOut("slow",function(){a.ea()?(a.F+=1,a.ta()):a.Ya()})};a.Ya=function(){void 0!=a.pa&&a.pa(a);a.F=0;void 0!=a.fa&&(a.G=setTimeout(function(){a.repeat()},a.fa*a.T))};return a}
function l(){return hR={update:function(b){$("#history").empty();$.each(b.ia,function(){historyItem=this;$("<strong>"+historyItem.W+"</strong><p>"+historyItem.b+"</p>").appendTo("#history")});$hide=$("<a>hide</a>");$hide.click(function(){b.hide();$("#history_panel").fadeOut("fast");$("#history").empty()}).appendTo("#history")},Sa:function(b){$("#history_panel").fadeIn("fast");hR.update(b)}}}
function m(){mH={ia:{},ua:{},ub:{},ra:void 0,R:!1};mH.f=l();mH.e=0;mH.sa=function(b){mH.ua[b.p]=!0;mH.ia[mH.e]=b;mH.e++;mH.update()};mH.Ua=function(b){mH.ra=b};mH.mb=function(){return mH.ra};mH.Ma=function(b){return!0==mH.ua[b]};mH.show=function(){mH.R=!0;mH.f.Sa(mH)};mH.update=function(){mH.R&&mH.f.update(mH)};mH.hide=function(){mH.R=!1};return mH}
function n(){aU={d:[],j:[]};var b=m();aU.register=function(a,b){aU.d[a]=b;void 0!=b.P&&b.P(b)};aU.reset=function(){aU.j=[]};aU.U=function(a){if(isNaN(a.t))return!1;void 0==aU.j[a.c]&&(aU.j[a.c]=0);if("+="==a.M)aU.j[a.c]+=Number(a.t);else if("="==a.M)aU.j[a.c]=Number(a.t);else return!1;void 0!=aU.Pa&&aU.Pa(a);return!0};aU.Ha=function(a){return aU.j[a]};aU.Ka=function(){for(var a in aU.d)void 0!=aU.d[a].oa&&aU.d[a].oa()};aU.ca=function(a){return aU.d[a]};aU.r=function(){return b};aU.s=function(a,e){void 0!=
e.o&&void 0!=aU.d[e.o]&&($v=$(aU.d[e.o].v),void 0!=$v&&"hide"!=e.wa&&(b.sa({W:e.o,b:a}),aU.d[e.o].s(a,e)))};return aU}
function q(b,a){pR={};pR.h=a;pR.Q=void 0;pR.A=b.initState;pR.H=b.isAutostart;pR.xml=void 0;pR.load=function(a){pR.Q=!1;$.ajax({type:"GET",url:a,dataType:"xml",success:function(a){pR.xml=$(a);pR.Q=!0;void 0!=pR.H&&void 0!=pR.A&&pR.H&&pR.h.D(pR.A)},error:function(){alert("Dialog file "+a+" not found.")}})};pR.Fa=function(a){var b={};$.each(pR.h.za,function(d,c){b[c.charAt(0).toUpperCase()+c.substring(1)]=a.getAttribute(c)});b.b=b.Text;b.n=b.Target;b.L=b.Invoke;b.eb=b.Overtime;b.hb=b.Timeout;b.N=b.Sound;
b.X=b.Id;void 0!=pR.h.$&&$.each(pR.h.$,function(d,c){b[c.charAt(0).toUpperCase()+c.substring(1)]=a.getAttribute(c)});return void 0==b.b?void 0:b};pR.Ga=function(){var a=element,b={};b.l=a.getAttribute("prop");$.each(pR.h.Aa,function(d,c){b[c.charAt(0).toUpperCase()+c.substring(1)]=a.getAttribute(c)});b.k=b.Goto;b.b=b.Text;b.ab=b.Condition;b.fb=b.Prop;b.m=b.Setter;b.N=b.Sound;b.L=b.Invoke;void 0!=pR.h.aa&&$.each(pR.h.aa,function(d,c){b[c.charAt(0).toUpperCase()+c.substring(1)]=a.getAttribute(c)});
return void 0==b.b&&void 0==GotoId?void 0:b};pR.Na=function(a,b,d){diff=100-b;0<diff&&(p=Math.floor(diff/d),$.each(a,function(){void 0==this.l&&(this.l=p)}))};pR.Qa=function(b){tokens=b.split(";");for(i=0;i<tokens.length;i++)0==tokens[i].indexOf("_")&&0<tokens[i].indexOf("=")&&(variables=tokens[i].split("="),isNaN(variables[1])?alert(tokens[i]+": invalid number format"):variables[0].indexOf("+")==variables[0].length-1?a.g.U({c:variables[0].substring(0,variables[0].length-1),M:"+=",t:variables[1]}):
a.g.U({c:variables[0],M:"=",t:variables[1]}));a.g.Ka()};pR.Ea=function(a){var b=Math.floor(100*Math.random()+1),d=void 0,c=0;$.each(a,function(){if(pR.La(this,b,c))return d=this,!1;c+=Number(this.l);return!0});return d};pR.La=function(a,b,d){return b>d&&b<=d+Number(a.l)};pR.da=function(){return pR.xml};return pR}
function r(){return rd={Da:function(b,a){cssClass="";a.r().Ma(b.p)&&(cssClass="class=visited");void 0!=b&&(s=void 0,void 0!=a.ma&&(s=a.ma(b)),void 0==s&&(s=$("<li "+cssClass+"></li>").html('<a href="#'+b.n+'_area">'+b.b+"</a>")),s.click({b:b.b,k:b.k,p:b.p,K:b.K,m:b.m,xa:b},function(b){a.r().Ua(b.data.K);a.r().sa({W:"you",b:b.data.b,p:b.data.p});void 0!=b.data.m&&a.a.Qa(b.data.m);a.D(b.data.k);void 0!=a.ja&&a.ja(b.data.xa)}),s.appendTo("#answers"))},Ta:function(b){return b},ga:function(){$('<ul id="answers"></ul>').appendTo("#dialog")}}}
var k=function(){var b={init:function(a){b.a=void 0;b.f=void 0;b.g=n();b.q=void 0;b.w=a.chapterUrl;b.ha=a.onload;b.ja=a.onanswer;b.ma=a.onrender;b.J=a.onsound;b.I=a.onfinish;b.$=a.attrCase;b.aa=a.attrReact;b.za="id text target sound overtime timeout invoke".split(" ");b.Aa="text goto condition invoke sound setter".split(" ");b.a=q(a,b);b.f=r();b.B=!1;b.B=a.isSoundEnabled;b.ba=a.disableBubbleRender;b.O=1},invokeInit:function(){if(void 0==b.ha||void 0==b.a)return!1;b.f.ga();b.ha();b.Ia();void 0!=b.w&&
b.a.load(b.w)},reset:function(){b.g.reset();b.D(b.a.A);temp=avatar.message},i:function(){return b.g},nb:function(){return b.f()},createAvatar:function(a){void 0==a.BubbleId&&(a.BubbleId="npc_bubble_"+b.O);void 0==a.Name&&(a.Name="avatar_"+b.O);a=g(a);if(void 0!=a&&void 0!=b.i())return b.i().register(a.name,a),b.O++,a},r:function(){return b.i().r()},gotoChapter:function(a){void 0!=a.nodeId&&(b.g.reset(),void 0!=a.chapterUrl&&a.chapterUrl!=b.w?(b.a.A=a.nodeId,b.w=a.chapterUrl,b.a.H=!0,b.a.load(b.w)):
b.D(a.nodeId))},D:function(a){if(void 0==b.a||!0!=b.a.Q)return!1;$("#answers").empty();var e;b.a.da().find("case[id="+a+"]").each(function(){e=this});a=b.a.Fa(e);if(void 0==a)return!1;!1==b.Ra(a)&&b.show(a)},show:function(a){b.Ja(a)},Xa:function(a){var e=0,f=0,d=0,c=[];nodeId=a.X;b.a.da().find("react[rel="+nodeId+"]").each(function(){element=this;params=b.a.Ga();params.p=nodeId+""+params.k;params.K=nodeId;params.n=a.n;void 0!=params.l?d+=Number(params.l):f+=1;c[e]=params;e++;0==d&&b.f.Da(params,b)});
$("#answer_widget").fadeIn("slow");if(0<d){b.a.Na(c,d,f);var h=b.a.Ea(c);void 0!=h&&void 0!=h.k&&setTimeout(function(){void 0!=h.m&&b.a.tb(h.m);b.D(h.k)},5E3)}0==e&&void 0!=b.I&&b.I(a)},update:function(){},invokeActions:function(a){avatar=k.i().ca(b.q);void 0!=avatar&&void 0!=a.L&&avatar.update(a.L,a)},Ja:function(a){a.n!=b.q&&void 0!=a.n&&(b.i().s("",{o:b.q,wa:"hide",Y:!0}),b.q=a.n);if(void 0==b.ba||!1==b.ba)a.b=b.f.Ta(a.b);avatar=k.i().ca(b.q);avatar.Va(a);b.i().s(a.b,{o:b.q,Y:!0})},ob:function(){b.r().show()},
Ia:function(){if(!b.B||void 0==b.J)return!1;px={Type:"INIT"};b.J(px)},Ra:function(a){if(!b.B||void 0==b.J||void 0==a.N)return!1;px={Type:"PLAY"};px.Id=a.X;px.Sound=a.N;px.Param=a;b.J(px)},getVariable:function(a){return b.g.Ha(a)},setVariable:function(a,e){b.g.U({c:a,t:e})}};return b}(""),ypi={};ypi.df=k;
