(this.webpackJsonpclient=this.webpackJsonpclient||[]).push([[1],{18:function(e,t,a){"use strict";a.d(t,"d",(function(){return i})),a.d(t,"e",(function(){return s})),a.d(t,"g",(function(){return m})),a.d(t,"c",(function(){return u})),a.d(t,"h",(function(){return d})),a.d(t,"b",(function(){return p})),a.d(t,"f",(function(){return h})),a.d(t,"a",(function(){return f}));var n=a(2),r=a.n(n),o=a(14),c=a(15),l=a.n(c),i=function(){var e=Object(o.a)(r.a.mark((function e(t,a){var n;return r.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,l.a.get("/api/user/".concat(t),{headers:{Authorization:"Bearer ".concat(a)}});case 3:if(!(n=e.sent)){e.next=6;break}return e.abrupt("return",n);case 6:e.next=12;break;case 8:return e.prev=8,e.t0=e.catch(0),console.error(e.t0.response),e.abrupt("return",e.t0);case 12:case"end":return e.stop()}}),e,null,[[0,8]])})));return function(t,a){return e.apply(this,arguments)}}(),s=function(){var e=Object(o.a)(r.a.mark((function e(t,a){var n;return r.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,l.a.delete("/api/user/".concat(t),{headers:{Authorization:"Bearer ".concat(a)}});case 3:if(!(n=e.sent)){e.next=6;break}return e.abrupt("return",n);case 6:e.next=12;break;case 8:return e.prev=8,e.t0=e.catch(0),console.error(e.t0),e.abrupt("return",e.t0);case 12:case"end":return e.stop()}}),e,null,[[0,8]])})));return function(t,a){return e.apply(this,arguments)}}(),m=function(){var e=Object(o.a)(r.a.mark((function e(t,a,n){return r.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,fetch("/api/user/".concat(t),{method:"PUT",headers:{Accept:"application/json",Authorization:"Bearer ".concat(a)},body:n}).then((function(e){return e.json()})).catch((function(e){return console.log(e)}));case 2:return e.abrupt("return",e.sent);case 3:case"end":return e.stop()}}),e)})));return function(t,a,n){return e.apply(this,arguments)}}(),u=function(){var e=Object(o.a)(r.a.mark((function e(){var t;return r.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,l.a.get("/api/users");case 3:if(!(t=e.sent)){e.next=6;break}return e.abrupt("return",t.data.users);case 6:e.next=12;break;case 8:return e.prev=8,e.t0=e.catch(0),console.log(e.t0),e.abrupt("return",e.t0);case 12:case"end":return e.stop()}}),e,null,[[0,8]])})));return function(){return e.apply(this,arguments)}}(),d=function(e,t){if("undefined"!==typeof window&&localStorage.getItem("jwt")){var a=JSON.parse(localStorage.getItem("jwt"));a.user=e,localStorage.setItem("jwt",JSON.stringify(a)),t()}},p=function(){var e=Object(o.a)(r.a.mark((function e(t,a,n){return r.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.abrupt("return",l.a.put("/api/user/follow",{userId:t,followId:n},{headers:{Authorization:"Bearer ".concat(a)}}).then((function(e){return e.data})).catch((function(e){return console.log(e)})));case 1:case"end":return e.stop()}}),e)})));return function(t,a,n){return e.apply(this,arguments)}}(),h=function(){var e=Object(o.a)(r.a.mark((function e(t,a,n){return r.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,fetch("/api/user/unfollow",{method:"PUT",headers:{Accept:"application/json","Content-Type":"application/json",Authorization:"Bearer ".concat(a)},body:JSON.stringify({userId:t,unfollowId:n})}).then((function(e){return e.json()})).catch((function(e){return console.log(e)}));case 2:return e.abrupt("return",e.sent);case 3:case"end":return e.stop()}}),e)})));return function(t,a,n){return e.apply(this,arguments)}}(),f=function(){var e=Object(o.a)(r.a.mark((function e(t,a){return r.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,l.a.get("/api/user/findpeople/".concat(t),{headers:{Authorization:"Bearer ".concat(a)}}).then((function(e){return e.data})).catch((function(e){return console.log(e)}));case 2:return e.abrupt("return",e.sent);case 3:case"end":return e.stop()}}),e)})));return function(t,a){return e.apply(this,arguments)}}()},23:function(e,t,a){e.exports=a.p+"static/media/Logo.f2ea5345.png"},36:function(e,t,a){e.exports=a.p+"static/media/404.3a0396ed.webp"},39:function(e,t,a){e.exports=a(69)},4:function(e,t,a){"use strict";a.d(t,"a",(function(){return i})),a.d(t,"d",(function(){return s})),a.d(t,"b",(function(){return m})),a.d(t,"e",(function(){return u})),a.d(t,"c",(function(){return d})),a.d(t,"f",(function(){return p}));var n=a(2),r=a.n(n),o=a(14),c=a(15),l=a.n(c),i=function(e,t){"undefined"!==typeof window&&(localStorage.setItem("jwt",JSON.stringify(e)),t())},s=function(){var e=Object(o.a)(r.a.mark((function e(t){return r.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if("undefined"===typeof window){e.next=11;break}return localStorage.removeItem("jwt"),t(),e.prev=3,e.next=6,l.a.get("/api/signout").then((function(e){return console.log("signout success")})).catch((function(e){return console.error(e)}));case 6:e.next=11;break;case 8:return e.prev=8,e.t0=e.catch(3),e.abrupt("return",console.log(e.t0));case 11:case"end":return e.stop()}}),e,null,[[3,8]])})));return function(t){return e.apply(this,arguments)}}(),m=function(e){return console.log("email: ",e),fetch("/api/forgot-password/",{method:"PUT",headers:{Accept:"application/json","Content-Type":"application/json"},body:JSON.stringify({email:e})}).then((function(e){return e.json()})).catch((function(e){return console.log(e)}))},u=function(e){return fetch("/api/reset-password/",{method:"PUT",headers:{Accept:"application/json","Content-Type":"application/json"},body:JSON.stringify(e)}).then((function(e){return e.json()})).catch((function(e){return console.log(e)}))},d=function(){return"undefined"!=typeof window&&(!!localStorage.getItem("jwt")&&JSON.parse(localStorage.getItem("jwt")))},p=function(){var e=Object(o.a)(r.a.mark((function e(t){var a;return r.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,fetch("/api/social-login",{method:"POST",headers:{Accept:"application/json","Content-Type":"application/json"},body:JSON.stringify(t)});case 3:return a=e.sent,console.log("signin response: ",a),e.abrupt("return",a.json());case 8:return e.prev=8,e.t0=e.catch(0),e.abrupt("return",console.log(e.t0));case 11:case"end":return e.stop()}}),e,null,[[0,8]])})));return function(t){return e.apply(this,arguments)}}()},44:function(e,t,a){},68:function(e,t,a){},69:function(e,t,a){"use strict";a.r(t);var n=a(0),r=a.n(n),o=a(34),c=a.n(o),l=(a(44),a(9)),i=a(10),s=a(12),m=a(11),u=a(1),d=a(37),p=a(4),h=["component"],f=function(e){var t=e.component,a=Object(d.a)(e,h);return r.a.createElement(u.b,Object.assign({},a,{render:function(e){return Object(p.c)()?r.a.createElement(t,e):r.a.createElement(u.a,{to:{pathname:"/login",state:{from:e.location}}})}}))},b=a(36),g=a.n(b),v=a(5),E=a(23),y=a.n(E),N=Object(u.g)((function(e){var t=e.history,a=(Object(p.c)()&&Object(p.c)().user.name,Object(p.c)()?Object(p.c)().user._id:"");return r.a.createElement("nav",{className:"navbar navbar-fixed-top navbar-expand-lg navbar-light bg-ash"},r.a.createElement("div",{className:"container-fluid"},r.a.createElement("button",{className:"navbar-toggler",type:"button","data-bs-toggle":"collapse","data-bs-target":"#navbarTogglerDemo03","aria-controls":"navbarTogglerDemo03","aria-expanded":"false","aria-label":"Toggle navigation"},r.a.createElement("span",{className:"navbar-toggler-icon"})),r.a.createElement(v.c,{className:"navbar-brand",to:"/"}," ",r.a.createElement("img",{alt:"brand",src:y.a,style:{height:"100px",maxWidth:"140px",marginTop:"-10px"}})),r.a.createElement("div",{className:"collapse navbar-collapse",id:"navbarTogglerDemo03"},r.a.createElement("ul",{className:"navbar-nav me-auto mb-2 mb-lg-0"},r.a.createElement("li",{className:"nav-item"},r.a.createElement("a",{className:"btn btn-primary-outline text-bold",href:"https://wa.link/aiyolz",target:"_blank",rel:"noopener noreferrer"}," Connect via WhatsApp")),Object(p.c)()&&r.a.createElement("li",{className:"nav-item",style:{marginTop:"5px"}},r.a.createElement(v.c,{exact:!0,to:"/users",className:"nav-link",activeClassName:"line"},"Users ",r.a.createElement("span",{className:"sr-only"})))),r.a.createElement("ul",{className:"navbar-nav mb-2 mb-lg-0"},r.a.createElement("li",{className:"nav-item"},r.a.createElement(v.c,{exact:!0,to:"/",className:"nav-link",activeClassName:"line"},"Home")),r.a.createElement("li",{className:"nav-item"},r.a.createElement(v.c,{to:"/about",className:"nav-link"},"About")),r.a.createElement("li",{className:"nav-item"},r.a.createElement("a",{href:"https://us6.list-manage.com/contact-form?u=2408b259748d68893764f02d2&form_id=403a1d9c279fce9fd53f5fce53c61bf9",className:"nav-link"},"Contact")),!1===Object(p.c)()?r.a.createElement("li",{className:"nav-item ml-2"},r.a.createElement("div",{className:"ui buttons"},r.a.createElement(v.c,{to:"/login"},r.a.createElement("button",{className:"ui button"},"Login")),r.a.createElement("div",{className:"or","data-text":"or"}),r.a.createElement(v.c,{to:"/signup"},r.a.createElement("button",{className:"ui positive button"},"Register")))):null,Object(p.c)()&&r.a.createElement("li",{className:"nav-item"},r.a.createElement("span",{className:"navbar-text ml-auto white-text"},r.a.createElement(v.c,{className:"nav-link",activeClassName:"line",to:"/user/".concat(a)},"Dashboard"))),Object(p.c)()&&"admin"===Object(p.c)().user.role&&r.a.createElement("li",{className:"nav-item",style:{marginTop:"5px"}},r.a.createElement(v.c,{to:"/admin",activeClassName:"line",className:"nav-link"},"Admin Tools")),Object(p.c)()?r.a.createElement("li",{className:"nav-item ml-2"},r.a.createElement("span",{className:"ui red button",style:{cursor:"pointer",color:"#ffffff"},onClick:function(){return Object(p.d)((function(){return t.push("/")}))}},"Signout")):null))))})),w=function(e){Object(s.a)(a,e);var t=Object(m.a)(a);function a(){return Object(l.a)(this,a),t.apply(this,arguments)}return Object(i.a)(a,[{key:"render",value:function(){return r.a.createElement("div",{style:{padding:"60px 0px"}},r.a.createElement("section",{id:"footer"},r.a.createElement("div",{className:"container"},r.a.createElement("div",{className:"row text-sm-left text-md-left"},r.a.createElement("div",{className:"col-xs-12 col-sm-3 col-md-3"},r.a.createElement("h6",{className:"text-white text-start"},"A.B.T Bizconnect is a business directory designed to enable users find artisans and business owners within their location easily It provides skilled artisans and business owners the opportunity to be showcased to the world by offering free advertisement, artisans can post job ads and also advertise their products."),r.a.createElement("p",{className:"text-white text-bold text-start"},r.a.createElement("i",{className:"fa fa-map"})," ",r.a.createElement("strong",null,"Address:")," 20 Jubrin Estate, Lekki- Epe Express Way, Lagos"),r.a.createElement("p",{className:"text-white text-bold text-start"},r.a.createElement("i",{className:"fa fa-phone"})," ",r.a.createElement("strong",null,"Telephone:")," ","08052959530")),r.a.createElement("div",{className:"col-xs-12 col-sm-3 col-md-3"},r.a.createElement("h5",null,"Contact"),r.a.createElement("p",{className:"text-white text-bold text-start"},r.a.createElement("i",{className:"fa fa-inbox"})," ",r.a.createElement("strong",null,"Email:")," ","info@abtbizconnect.com"),r.a.createElement("p",{className:"text-white text-bold text-start"},r.a.createElement("i",{className:"fa fa-phone"})," ",r.a.createElement("strong",null,"Telephone:")," ","08052959530")),r.a.createElement("div",{className:"col-xs-12 col-sm-3 col-md-3",style:{paddingLeft:"5%"}},r.a.createElement("h5",null,"Quick links"),r.a.createElement("ul",{className:"list-unstyled quick-links"},r.a.createElement("li",null,r.a.createElement("a",{href:"/"},r.a.createElement("i",{className:"fa fa-angle-double-right"}),"Home")),r.a.createElement("li",null,r.a.createElement("a",{href:"/about"},r.a.createElement("i",{className:"fa fa-angle-double-right"}),"About")),r.a.createElement("li",null,r.a.createElement("a",{href:"/faq"},r.a.createElement("i",{className:"fa fa-angle-double-right"}),"FAQ")),r.a.createElement("li",null,r.a.createElement("a",{href:"https://us6.list-manage.com/contact-form?u=2408b259748d68893764f02d2&form_id=403a1d9c279fce9fd53f5fce53c61bf9",target:"__blank"},r.a.createElement("i",{className:"fa fa-angle-double-right"}),"Contact")),r.a.createElement("li",null,r.a.createElement(v.b,{to:"/disclaimer"},r.a.createElement("i",{className:"fa fa-angle-double-right"}),"Disclaimer")))),r.a.createElement("div",{className:"col-xs-12 col-sm-3 col-md-3"},r.a.createElement("h5",null,"Recent Listing"),r.a.createElement("ul",{className:"list-unstyled quick-links"},r.a.createElement("li",null,r.a.createElement("a",{href:"/post/60d274be2bc16000207a3a07"},r.a.createElement("i",{className:"fa fa-angle-double-right"}),"One touch beauty")),r.a.createElement("li",null,r.a.createElement("a",{href:"/post/60d2096d65373db3894ca47c"},r.a.createElement("i",{className:"fa fa-angle-double-right"}),"Tim Donut Shop"))))),r.a.createElement("div",{className:"row"},r.a.createElement("div",{className:"col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white"},r.a.createElement("h5",null,"2021 \xa9A.B.T BizConnect. All right Reversed."))))))}}]),a}(n.Component),x=function(e){Object(s.a)(a,e);var t=Object(m.a)(a);function a(){return Object(l.a)(this,a),t.apply(this,arguments)}return Object(i.a)(a,[{key:"render",value:function(){return r.a.createElement("div",null,r.a.createElement("section",{className:"main-content bg-light py-4 mb-5"},r.a.createElement("div",{className:"container"},r.a.createElement("div",{className:"row"},r.a.createElement("div",{className:"col-md-8"},r.a.createElement("div",{className:"row mb-2"},r.a.createElement("div",{className:"col-md-12"},r.a.createElement("div",null,r.a.createElement("div",{className:"card-body"},r.a.createElement("div",{className:"row"},r.a.createElement("div",{className:"col-md-12"},r.a.createElement("h2",null,"About Us"),r.a.createElement("p",null," ","A.B.T Biz Connect is an integrated firm in Nigeria registered with the Corporate Affairs Commission, with primary aim of growing businesses, trade and other commercial activities through the inevitable power of Contemporary Marketing, Media Participation, Trade And Business Connect, Real Estate Sales and Marketing, plus other Merchandise. We sell company's products and services to individuals, businesses and Government Organizations, Etc. While promoting the image of our clients to the general public through building a large customer base and sustaining the relationship with our relationship approach for future gains. Chains of our trades and services may be domestic and or international, starting with local and potential buyers in Nigeria and from across the west African region. ABT Biz Connect- (An auspices of A.B.T Integrated Services Limited)."))))))))))))}}]),a}(n.Component),j=(a(68),function(e){Object(s.a)(a,e);var t=Object(m.a)(a);function a(){return Object(l.a)(this,a),t.apply(this,arguments)}return Object(i.a)(a,[{key:"render",value:function(){return r.a.createElement("div",null,r.a.createElement("div",{className:"container mb-2"},r.a.createElement("div",{className:"col-12"},r.a.createElement("h1",{className:"text-green mb-4 text-center"},"Frequently Asked Questions")),r.a.createElement("div",{className:"accordion",id:"accordionExample"},r.a.createElement("div",{className:"accordion-item"},r.a.createElement("h2",{className:"accordion-header",id:"headingOne"},r.a.createElement("button",{className:"accordion-button",type:"button","data-bs-toggle":"collapse","data-bs-target":"#collapseOne","aria-expanded":"true","aria-controls":"collapseOne"},"What is A.B.T BizConnect?")),r.a.createElement("div",{id:"collapseOne",className:"accordion-collapse collapse show","aria-labelledby":"headingOne","data-bs-parent":"#accordionExample"},r.a.createElement("div",{className:"accordion-body"},"A.B.T Biz Connect is an integrated firm in Nigeria registered with the Corporate Affairs Commission, with primary aim of growing businesses, trade and other commercial activities through the inevitable power of Contemporary Marketing, Media Participation, Trade And Business Connect, Real Estate Sales and Marketing, plus other Merchandise. We sell company's products and services to individuals, businesses and Government Organizations, Etc. While promoting the image of our clients to the general public through building a large customer base and sustaining the relationship with our relationship approach for future gains. Chains of our trades and services may be domestic and or international, starting with local and potential buyers in Nigeria and from across the west African region. ABT Biz Connect- (An auspices of A.B.T Integrated Services Limited)."))),r.a.createElement("div",{className:"accordion-item"},r.a.createElement("h2",{className:"accordion-header",id:"headingTwo"},r.a.createElement("button",{className:"accordion-button collapsed",type:"button","data-bs-toggle":"collapse","data-bs-target":"#collapseTwo","aria-expanded":"false","aria-controls":"collapseTwo"},"How do I find the type of business I am looking for?")),r.a.createElement("div",{id:"collapseTwo",className:"accordion-collapse collapse","aria-labelledby":"headingTwo","data-bs-parent":"#accordionExample"},r.a.createElement("div",{className:"accordion-body"},"For a general location search, type in what you are looking for in the SEARCH bar or go to the LISTINGS menu to see the categories on the drop down menu."))),r.a.createElement("div",{className:"accordion-item"},r.a.createElement("h2",{className:"accordion-header",id:"headingThree"},r.a.createElement("button",{className:"accordion-button collapsed",type:"button","data-bs-toggle":"collapse","data-bs-target":"#collapseThree","aria-expanded":"false","aria-controls":"collapseThree"},"How do people get on the list?")),r.a.createElement("div",{id:"collapseThree",className:"accordion-collapse collapse","aria-labelledby":"headingThree","data-bs-parent":"#accordionExample"},r.a.createElement("div",{className:"accordion-body"},"We are a niche directory meaning we only list those businesses that offer services or products that deal in home restoration, traditional craftsmanship or local farm-to-table production. Excluding Antique businesses, resellers or online stores are not eligible to be on the list. Businesses have to apply and be approved to be on the list. Check out our list of businesses here. You can apply to be on the list by first, Sign up and then go to Login into your account to verify your User dashbaord"))))))}}]),a}(n.Component)),k=function(e){Object(s.a)(a,e);var t=Object(m.a)(a);function a(){return Object(l.a)(this,a),t.apply(this,arguments)}return Object(i.a)(a,[{key:"render",value:function(){return r.a.createElement("div",null,r.a.createElement("div",{className:"container"},r.a.createElement("h3",{className:"text-center"},"Disclaimer for ABT Integrated services ltd"),r.a.createElement("p",null,"If you require any more information or have any questions about our site's disclaimer, please feel free to contact us by email at akokotaj@gmail.com ."),r.a.createElement("h2",null,"Disclaimers for A.B.T BizConnect"),r.a.createElement("p",null,"All the information on this website - abtbizconnect.com - is published in good faith and for general information purpose only. A.B.T BizConnect does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (A.B.T BizConnect), is strictly at your own risk. A.B.T BizConnect will not be liable for any losses and/or damages in connection with the use of our website."),r.a.createElement("p",null,"From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'."),r.a.createElement("p",null,'Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.'),r.a.createElement("h2",null,"Consent"),r.a.createElement("p",null,"By using our website, you hereby consent to our disclaimer and agree to its terms."),r.a.createElement("h2",null,"Update"),r.a.createElement("p",null,"Should we update, amend or make any changes to this document, those changes will be prominently posted here.")))}}]),a}(n.Component),C=a(19),O=a(18),T=function(e){Object(s.a)(a,e);var t=Object(m.a)(a);function a(){var e;return Object(l.a)(this,a),(e=t.call(this)).init=function(t){var a=Object(p.c)().token;Object(O.d)(t,a).then((function(t){return e.setState({id:t.data.id,about:t.data.about,username:t.data.username,phoneNumber:t.data.phoneNumber,address:t.data.address,lga:t.data.lga,city:t.data.city,category:t.data.category,whatsappNumber:t.data.whatsappNumber,name:t.data.name,email:t.data.email})})).catch((function(e){return console.log(e)}))},e.handleChange=function(t){return function(a){var n;e.setState({error:""});var r="photo"===t?a.target.files[0]:a.target.value,o="photo"===t?a.target.files[0].size:0;e.userData.set(t,r),e.setState((n={},Object(C.a)(n,t,r),Object(C.a)(n,"fileSize",o),n))}},e.clickSubmit=function(t){if(t.preventDefault(),e.setState({loading:!0}),e.isValid()){var a=e.props.match.params.userId,n=Object(p.c)().token;Object(O.g)(a,n,e.userData).then((function(t){t.error?e.setState({error:t.error}):"admin"===Object(p.c)().user.role?e.setState({id:t._id,redirectToProfile:!0}):Object(O.h)(t,(function(){e.setState({id:t._id,redirectToProfile:!0})}))}))}},e.isValid=function(){var t=e.state,a=t.name,n=t.email,r=t.password;return t.fileSize>1e6?(e.setState({error:"File size should be less than 100kb",loading:!1}),!1):0===a.length?(e.setState({error:"Name is required",loading:!1}),!1):/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(n)?!(r.length>=1&&r.length<=5)||(e.setState({error:"Password must be at least 6 characters long",loading:!1}),!1):(e.setState({error:"A valid Email is required",loading:!1}),!1)},e.toggle=function(){var e=document.getElementById("materialRegisterFormPassword");"password"===e.type?e.type="text":e.type="password"},e.state={id:"",name:"",email:"",username:"",phoneNumber:"",address:"",lga:"",city:"",category:"",whatsappNumber:"",about:"",password:"",redirectToProfile:!1,loading:!1,fileSize:0},e}return Object(i.a)(a,[{key:"componentDidMount",value:function(){this.userData=new FormData;var e=this.props.match.params.userId;this.init(e)}},{key:"render",value:function(){var e=this.state,t=e.id,a=e.name,n=e.email,o=e.redirectToProfile,c=e.loading,l=e.about,i=e.address,s=e.city,m=e.whatsappNumber,d=e.category,p=e.lga,h=e.phoneNumber,f=e.username;return o?r.a.createElement(u.a,{push:!0,to:"/user/".concat(t)}):r.a.createElement("div",{className:"container",style:{marginTop:"1vh",padding:"5vw"}},r.a.createElement("div",{className:"card cloudy-knoxville-gradient"},r.a.createElement("h5",{className:"card-header info-color white-text text-center py-4"},r.a.createElement("strong",null,"Edit Profile")),r.a.createElement("div",{className:"card-body px-lg-5 pt-0"},c?"Loading...":null,r.a.createElement("form",{onSubmit:this.clickSubmit,encType:"multipart/form-data",className:"text-center",style:{color:"#757575"}},r.a.createElement("div",{className:"form"},r.a.createElement("div",{className:"md-form"},r.a.createElement("input",{type:"file",accept:"image/*",required:"required",onChange:this.handleChange("photo"),className:"form-control"}))),r.a.createElement("div",{className:"form"},r.a.createElement("div",{className:"md-form"},r.a.createElement("input",{autoCapitalize:"true",autoComplete:"username",type:"text",required:"required",onChange:this.handleChange("name"),value:a,id:"materialRegisterFormLastName",className:"form-control"}),r.a.createElement("label",{htmlFor:"materialRegisterFormLastName"},"Full Name"))),r.a.createElement("div",{className:"form"},r.a.createElement("div",{className:"md-form"},r.a.createElement("input",{autoComplete:"email",type:"email",required:"required",onChange:this.handleChange("email"),value:n,id:"email",className:"form-control"}),r.a.createElement("label",{htmlFor:"email"},"Email"))),r.a.createElement("div",{className:"form"},r.a.createElement("div",{className:"md-form"},r.a.createElement("input",{autoComplete:"phoneNumber",type:"text",required:"required",onChange:this.handleChange("phoneNumber"),value:h,id:"phoneNumber",className:"form-control"}),r.a.createElement("label",{htmlFor:"phoneNumber"},"Mobile Phone Number"))),r.a.createElement("div",{className:"form"},r.a.createElement("div",{className:"md-form"},r.a.createElement("input",{autoComplete:"address",type:"tex",required:"required",onChange:this.handleChange("address"),value:i,id:"address",className:"form-control"}),r.a.createElement("label",{htmlFor:"adress"},"Address"))),r.a.createElement("div",{className:"form"},r.a.createElement("div",{className:"md-form"},r.a.createElement("input",{autoComplete:"lga",type:"text",required:"required",onChange:this.handleChange("lga"),value:p,id:"lga",className:"form-control"}),r.a.createElement("label",{htmlFor:"lga"},"Local Government Area"))),r.a.createElement("div",{className:"form"},r.a.createElement("div",{className:"md-form"},r.a.createElement("input",{autoComplete:"city",type:"text",required:"required",onChange:this.handleChange("city"),value:s,id:"city",className:"form-control"}),r.a.createElement("label",{htmlFor:"city"},"City"))),r.a.createElement("div",{className:"form"},r.a.createElement("div",{className:"md-form"},r.a.createElement("input",{autoComplete:"category",type:"text",onChange:this.handleChange("category"),value:d,id:"category",className:"form-control"}),r.a.createElement("label",{htmlFor:"category"},"Category"))),r.a.createElement("div",{className:"form"},r.a.createElement("div",{className:"md-form"},r.a.createElement("input",{autoComplete:"username",type:"text",disabled:!0,onChange:this.handleChange("username"),value:f,id:"username",className:"form-control"}),r.a.createElement("label",{htmlFor:"username"},"Username"))),r.a.createElement("div",{className:"form"},r.a.createElement("div",{className:"md-form"},r.a.createElement("input",{autoComplete:"whatsappNumber",type:"text",required:"required",onChange:this.handleChange("whatsappNumber"),value:m,id:"whatsappNumber",className:"form-control"}),r.a.createElement("label",{htmlFor:"whatsappNumber"},"Whatsapp Phone Number"))),r.a.createElement("div",{className:"md-form"},r.a.createElement("input",{autoComplete:"current-password",type:"password",required:"required",onChange:this.handleChange("password"),id:"materialRegisterFormPassword",className:"form-control","aria-describedby":"materialRegisterFormPasswordHelpBlock"}),r.a.createElement("label",{htmlFor:"materialRegisterFormPassword"},"Password"),r.a.createElement("button",{className:"btn btn-info mt-4",onClick:this.toggle},"Show Password"),r.a.createElement("small",{id:"materialRegisterFormPasswordHelpBlock",className:"form-text text-muted mb-4"},"Atleast 6 chars and 1 digit")),r.a.createElement("div",{className:"md-form"},r.a.createElement("textarea",{onChange:this.handleChange("about"),value:l,id:"materialContactFormMessage",className:"form-control md-textarea",rows:"3"}),r.a.createElement("label",{htmlFor:"materialContactFormMessage"},"About")),r.a.createElement("button",{onClick:this.clickSubmit,className:"btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0",type:"submit"},"Update")))))}}]),a}(n.Component),A=Object(n.lazy)((function(){return a.e(5).then(a.bind(null,150))})),S=Object(n.lazy)((function(){return a.e(7).then(a.bind(null,151))})),z=Object(n.lazy)((function(){return a.e(11).then(a.bind(null,152))})),B=Object(n.lazy)((function(){return a.e(9).then(a.bind(null,161))})),P=Object(n.lazy)((function(){return a.e(10).then(a.bind(null,159))})),q=Object(n.lazy)((function(){return a.e(15).then(a.bind(null,83))})),I=Object(n.lazy)((function(){return a.e(14).then(a.bind(null,153))})),F=Object(n.lazy)((function(){return Promise.all([a.e(0),a.e(13)]).then(a.bind(null,154))})),W=Object(n.lazy)((function(){return Promise.all([a.e(4),a.e(8)]).then(a.bind(null,160))})),L=Object(n.lazy)((function(){return Promise.all([a.e(0),a.e(12)]).then(a.bind(null,155))})),R=Object(n.lazy)((function(){return a.e(16).then(a.bind(null,156))})),D=Object(n.lazy)((function(){return a.e(17).then(a.bind(null,157))})),M=Object(n.lazy)((function(){return a.e(6).then(a.bind(null,158))})),U=function(){return r.a.createElement("div",{id:"error"},r.a.createElement("img",{src:g.a,alt:"404",style:{height:"90vh"}}))},J=function(){return r.a.createElement("div",{id:"main"},r.a.createElement(N,null),r.a.createElement(n.Suspense,{fallback:r.a.createElement("div",{align:"center",className:"ui segment"},r.a.createElement("div",{className:"ui active inverted dimmer"},r.a.createElement("div",{className:"ui text loader"},"Loading")),r.a.createElement("p",null))},r.a.createElement(u.d,null,r.a.createElement(u.b,{path:"/",exact:!0,component:A}),r.a.createElement(u.b,{path:"/listing",component:S}),r.a.createElement(u.b,{path:"/signup",component:z}),r.a.createElement(u.b,{path:"/about",component:x}),r.a.createElement(u.b,{path:"/disclaimer",component:k}),r.a.createElement(u.b,{path:"/faq",component:j}),r.a.createElement(u.b,{path:"/post/:postId",component:W}),r.a.createElement(f,{path:"/admin",component:M}),r.a.createElement(f,{path:"/user/:userId",component:P}),r.a.createElement(f,{path:"/posts/edit/:postId",component:L}),r.a.createElement(f,{path:"/profile/edit/:userId",component:T}),r.a.createElement(f,{path:"/findpeople",component:I}),r.a.createElement(f,{path:"/create/post",component:F}),r.a.createElement(u.b,{path:"/login",component:B}),r.a.createElement(u.b,{path:"/users",component:q}),r.a.createElement(u.b,{path:"/forgot-password",component:R}),r.a.createElement(u.b,{path:"/reset-password/:resetPasswordToken",component:D}),r.a.createElement(u.b,{component:U}))),r.a.createElement(w,null))},_=function(e){Object(s.a)(a,e);var t=Object(m.a)(a);function a(){return Object(l.a)(this,a),t.apply(this,arguments)}return Object(i.a)(a,[{key:"render",value:function(){return r.a.createElement(v.a,null,r.a.createElement(J,null))}}]),a}(n.Component),H=Boolean("localhost"===window.location.hostname||"[::1]"===window.location.hostname||window.location.hostname.match(/^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/));function G(e,t){navigator.serviceWorker.register(e).then((function(e){e.onupdatefound=function(){var a=e.installing;null!=a&&(a.onstatechange=function(){"installed"===a.state&&(navigator.serviceWorker.controller?(console.log("New content is available and will be used when all tabs for this page are closed. See https://bit.ly/CRA-PWA."),t&&t.onUpdate&&t.onUpdate(e)):(console.log("Content is cached for offline use."),t&&t.onSuccess&&t.onSuccess(e)))})}})).catch((function(e){console.error("Error during service worker registration:",e)}))}c.a.render(r.a.createElement(r.a.StrictMode,null,r.a.createElement(_,null)),document.getElementById("root")),function(e){if("serviceWorker"in navigator){if(new URL("",window.location.href).origin!==window.location.origin)return;window.addEventListener("load",(function(){var t="".concat("","/service-worker.js");H?(!function(e,t){fetch(e,{headers:{"Service-Worker":"script"}}).then((function(a){var n=a.headers.get("content-type");404===a.status||null!=n&&-1===n.indexOf("javascript")?navigator.serviceWorker.ready.then((function(e){e.unregister().then((function(){window.location.reload()}))})):G(e,t)})).catch((function(){console.log("No internet connection found. App is running in offline mode.")}))}(t,e),navigator.serviceWorker.ready.then((function(){console.log("This web app is being served cache-first by a service worker. To learn more, visit https://bit.ly/CRA-PWA")}))):G(t,e)}))}}()}},[[39,2,3]]]);
//# sourceMappingURL=main.7a7640a2.chunk.js.map