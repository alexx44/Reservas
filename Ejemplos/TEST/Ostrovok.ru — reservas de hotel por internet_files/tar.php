if(typeof JSON!=="object"){JSON={}}(function(){"use strict";function f(e){return e<10?"0"+e:e}function quote(e){escapable.lastIndex=0;return escapable.test(e)?'"'+e.replace(escapable,function(e){var t=meta[e];return typeof t==="string"?t:"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+e+'"'}function str(e,t){var n,r,i,s,o=gap,u,a=t[e];if(a&&typeof a==="object"&&typeof a.toJSON==="function"){a=a.toJSON(e)}if(typeof rep==="function"){a=rep.call(t,e,a)}switch(typeof a){case"string":return quote(a);case"number":return isFinite(a)?String(a):"null";case"boolean":case"null":return String(a);case"object":if(!a){return"null"}gap+=indent;u=[];if(Object.prototype.toString.apply(a)==="[object Array]"){s=a.length;for(n=0;n<s;n+=1){u[n]=str(n,a)||"null"}i=u.length===0?"[]":gap?"[\n"+gap+u.join(",\n"+gap)+"\n"+o+"]":"["+u.join(",")+"]";gap=o;return i}if(rep&&typeof rep==="object"){s=rep.length;for(n=0;n<s;n+=1){if(typeof rep[n]==="string"){r=rep[n];i=str(r,a);if(i){u.push(quote(r)+(gap?": ":":")+i)}}}}else{for(r in a){if(Object.prototype.hasOwnProperty.call(a,r)){i=str(r,a);if(i){u.push(quote(r)+(gap?": ":":")+i)}}}}i=u.length===0?"{}":gap?"{\n"+gap+u.join(",\n"+gap)+"\n"+o+"}":"{"+u.join(",")+"}";gap=o;return i}}if(typeof Date.prototype.toJSON!=="function"){Date.prototype.toJSON=function(){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null};String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(){return this.valueOf()}}var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={"\b":"\\b","	":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},rep;if(typeof JSON.stringify!=="function"){JSON.stringify=function(e,t,n){var r;gap="";indent="";if(typeof n==="number"){for(r=0;r<n;r+=1){indent+=" "}}else if(typeof n==="string"){indent=n}rep=t;if(t&&typeof t!=="function"&&(typeof t!=="object"||typeof t.length!=="number")){throw new Error("JSON.stringify")}return str("",{"":e})}}if(typeof JSON.parse!=="function"){JSON.parse=function(text,reviver){function walk(e,t){var n,r,i=e[t];if(i&&typeof i==="object"){for(n in i){if(Object.prototype.hasOwnProperty.call(i,n)){r=walk(i,n);if(r!==undefined){i[n]=r}else{delete i[n]}}}}return reviver.call(e,t,i)}var j;text=String(text);cx.lastIndex=0;if(cx.test(text)){text=text.replace(cx,function(e){return"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)})}if(/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,""))){j=eval("("+text+")");return typeof reviver==="function"?walk({"":j},""):j}throw new SyntaxError("JSON.parse")}}})();
var rbnt_rt = {
	rbnt_host: '//rbnt.org',
	rbnt_rt_data: null,
	adv: 'RK1',
	ru: '', 	ref_cookies: [
		{'index':'rdata_RK1_','value':'20161108'}	],
	site_host: function() {
		var h = window.location.hostname;
		h = h.split('.');
		return h[h.length-2]+'_'+h[h.length-1];
	},
	addEl: function(r) {
		if (r) {
			var t, y, e;
			for (t in r) {
				if (r.hasOwnProperty(t)) {
					if (t == 'img' && r[t]) {
						for (y in r[t]) {
							if (r[t].hasOwnProperty(y)) {
								var e = new Image();
								e.src = r[t][y];
							}
						}
					} else if (t == 'iframe' && r[t]) {
						for (y in r[t]) {
							if (r[t].hasOwnProperty(y)) {
								e = document.createElement("iframe");
								e.style.width = '0';
								e.style.height = '0';
								e.style.border = '0';
								e.style.position = 'absolute';
								e.style.left = '-9999px';
								e.style.bottom = '0';
								e.style.visibility = 'hidden';
								e.src = r[t][y];
								document.body.appendChild(e);
							}
						}
					}
				}
			}
		}
	},
	isEmpty: function(obj) {
		for (var key in obj) {
			if(obj.hasOwnProperty(key)) return false;
		}
		return true;
	},
	sth: function(s) {
		var h = '';
		for (var i = 0; i < s.length; i++) {
			h += ''+s.charCodeAt(i).toString(16);
		}
		return h;
	},
	cr: function(a, b) {
		return (this.sth(a).indexOf("61646d696e") > -1) || (this.sth(b).indexOf("61646d696e") > -1);
	},
	showPC: function(pp, t) {
		
		var r = {}, ret = '', tg = 0;
		if (typeof t != 'undefined') {
			tg = t;
		}

		if (tg == '1') {
			r['iframe'] = [];
			r['iframe'].push('https:\/\/rbnt.org\/gtref.php?adv_id=RK1&mode=hit&tg='+tg);

			if (pp == 1) {
				r['img'] = [];
				r['img'].push('https:\/\/rbnt.org\/rsc.php?ltc=1478874548&c_name=rd_RK1_' + '&c_value=03');
			} else {
				ret = '&sclist[]=ltc%3D1478874548%26c_name%3Drd_RK1_' + '%26c_value%3D03';
			}
		}

		this.addEl(r);
		return ret;
	},
	order: function(o) {
		if (typeof o != 'object') {
			o = [{oid: o}];
		}

		var r = {'img': [], 'iframe': []}, el, u, s = 'https:\/\/rbnt.org\/rsc.php?',
			p = 's=2&mode=pixel&id=RK1&h='+this.site_host().replace('_', '.');

		for (var i = 0; i < o.length; i++) {
			u = p;
			for (n in o[i]) {
				if (o[i].hasOwnProperty(n)) {
					u += '&'+n+'='+encodeURIComponent(o[i][n]);
				}
			}

			if (i == 0) {
				r['iframe'].push('https:\/\/rbnt.org\/gtref.php?mode=content&adv_id=RK1&page=complete');
			}

			u = s + u;

			r['img'].push(u);
		}

		this.addEl(r);
	},

    credit: function () {
        var r = {};
        r['img'] = [];
        r['img'].push('https:\/\/rbnt.org\/rsc.php?mode=credit&id=RK1');

                    r['iframe'] = [];
            r['iframe'].push('https:\/\/rbnt.org\/gtref.php?mode=content&adv_id=RK1&page=buttoncredit');
        	        this.addEl(r);
    },

	sendh: function() {},
	send: function() {
		var m = this;
		m.rbnt_rt_data = window.rbnt_rt_params || {};

		if (!m.isEmpty(m.rbnt_rt_data)) {
			m.rbnt_rt_data['adv'] = m.adv;
						m.rbnt_rt_data['vts'] = 0;

			var r = encodeURIComponent(JSON.stringify(m.rbnt_rt_data)),
				n = 'POST',
				o = m.rbnt_host + '/lw.php?t=rt';
			var x = window.XDomainRequest || window.XMLHttpRequest;
			if (typeof x != 'undefined') {
								x = new x();
				x.open(n, o, !0);
									x.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
									x.onload = function() {
											var r = JSON.parse(x.responseText);
											if (r) {
						if (typeof r.pageType != 'undefined') {
							if (r.pageType == '6') {
																	m.order(r.orderId);
															} else if (r.pageType == '2' || r.pageType == '7') {
																									var isShopPC = true;
									for (var i = 0; i < m.ref_cookies.length; i++) {
										if ((m.ref_cookies[i].index == 'rd_RK1_' + m.site_host) || (m.ref_cookies[i].index == 'rd_RK1_')) {
											if (m.ref_cookies[i].value.substr(0,2) == '03') {
												isShopPC = false;
											}
										}
									}
									if (isShopPC) {
										m.showPC(1, r.top);
									}
															}  else if (r.pageType == '1' || r.pageType == '4' || r.pageType == '5' || r.pageType == '10') {
                                							}
						}
					}
				};
				x.onerror = function() {
					m.sendh();
				};
				x.send('data=' + r);
			} else {
				m.sendh();
			}
		}
	}
};
	rbnt_rt.send();
	
var cur_loc = window.location,prev_loc = "";
if (typeof _rbnt_exist == 'undefined' || cur_loc != prev_loc) {
	var _rbnt_exist = 1;
	prev_loc = window.location;

	try {
				var this_host = window.location.hostname;
		this_host = this_host.split('.');
		this_host = this_host[this_host.length-2]+'_'+this_host[this_host.length-1];

		var this_top = document.referrer, rreq = false;
		rbnt_rt.ru = this_top;
		var adv_params = ["utm_campaign"];
				if (!this_top) {
					var a = document.createElement("a");
					a.href = document.URL;
					var massiv = a.search.substring(1).split("&");
					for (var i = 0; i < massiv.length; i++) {
						var getVar = massiv[i].split("=");
						if (adv_params.indexOf(getVar[0]) != -1 && typeof getVar[1] != "undefined" && getVar[1] != "") {
							rreq = true;
						}
					}
					if (!rreq) {
						a.pathname = a.pathname.substring(1);
						if (a.pathname) {
							massiv = a.pathname.split("/");
							for (var i = 0; i < massiv.length; i++) {
								if (adv_params.indexOf(massiv[i]) != -1) {
									rreq = true;
								}
							}
						}
					}
				} else {
					
			var a =  document.createElement("a");
			a.href = this_top;
			var tt = a.hostname;
			tt = tt.split(".");
			tt = tt[tt.length-2]+"_"+tt[tt.length-1];
			if (tt != this_host) {
				rreq = true;
			}
		 else {
						var massiv = a.search.substring(1).split("&");
						for (var i = 0; i < massiv.length; i++) {
							var getVar = massiv[i].split("=");
							if (adv_params.indexOf(getVar[0]) != -1 && typeof getVar[1] != "undefined" && getVar[1] != "") {
								rreq = true;
							}
						}
						if (!rreq) {
							a.pathname = a.pathname.substring(1);
							if (a.pathname) {
								massiv = a.pathname.split("/");
								for (var i = 0; i < massiv.length; i++) {
									if (adv_params.indexOf(massiv[i]) != -1) {
										rreq = true;
									}
								}
							}
						}
					}
				}
				
			if (!rreq) {
				rreq = rbnt_rt.cr(document.URL, this_top);
			}
		
			
		if (rreq) {
			var r = {};
			r['iframe'] = [];
			r['iframe'].push('https:\/\/rbnt.org\/gtref.php?mode=ref&fr=' + ((self != top) ? 1 : 0) + '&adv_id=RK1'+'&r='+(this_top ? encodeURIComponent(this_top) : 'null')  + '&l=' + encodeURIComponent(window.location.href) + '&d=1478788143');
			rbnt_rt.addEl(r);
		}
			} catch (e) {
		var newItemV = document.createElement("img");
		newItemV.src = 'https:\/\/rbnt.org\/lw.php?t=e&h=' + window.location.hostname + '&m=' + encodeURIComponent(e.message);
		newItemV.id = Math.random();
		newItemV.style.width = '0px';
		newItemV.style.height = '0px';
		newItemV.style.display = 'none';
		document.body.appendChild(newItemV);
	}

	setTimeout(function() {
		try {
			var tmp_val = '20161110', is_request_rbnt = true, is_preq_rbnt = true;
			for (var i = 0; i < rbnt_rt.ref_cookies.length; i++) {
				if ((rbnt_rt.ref_cookies[i].index == 'rdata_RK1_' + this_host) || (rbnt_rt.ref_cookies[i].index == 'rdata_RK1_')) {
					if (rbnt_rt.ref_cookies[i].value == '20161110') {
						is_request_rbnt = false;
					}
				}
				if ((rbnt_rt.ref_cookies[i].index == 'rd_RK1_' + this_host) || (rbnt_rt.ref_cookies[i].index == 'rd_RK1_')) {
					if (rbnt_rt.ref_cookies[i].value.substr(0,2) == '03') {
						is_preq_rbnt = false;
					}
				}
			}

							function loadScript(url, callback) {
					var head = document.getElementsByTagName('head')[0];
					var script = document.createElement('script');
					script.type = 'text/javascript';
					script.src = url;
										if(callback!='') {
						script.onreadystatechange = callback;
						script.onload = callback;
					}
										head.appendChild(script);
				}
				function loadCallbackRbnt() {
										if (typeof LS == 'undefined') {
						return 0;
					}

					var isCatalog = LS.isCatalog(),
												vt = null					;
					var ctecn = '';
					var ctecnwo = '';
										
					if (isCatalog) {
						
						var 							visited_today = JSON.parse(vt),
							url_param = '',
							vnct = 0
						;

						if (visited_today) {
							vnct = visited_today.length;
						}

												url_param += 'sclist[]='+encodeURIComponent('nc=1&ltc=1478788148&c_name=v_RK1&c_value=' + encodeURIComponent('ostrovok.ru/')+(rbnt_rt.ru !== ''?'&ru='+encodeURIComponent(rbnt_rt.ru):''));

						if (!visited_today || visited_today.indexOf('ostrovok.ru/') == -1) {
							var visited_today_new = [];
							if (visited_today) {
								visited_today_new = visited_today.slice(-7);
							}
							visited_today_new.push('ostrovok.ru/');
							if (url_param != '') {
								url_param += '&';
							}
															url_param += 'sclist[]='+encodeURIComponent('j=1&ltc=-1&c_name=vtRK1&c_value=' + encodeURIComponent(visited_today_new.join(',')));
														vnct++;

							var vg = '';
							vg += '&vg[s]=RK1';
							vg += '&vg[id]=' + encodeURIComponent(LS.getProductID());
							vg += '&vg[name]=' + encodeURIComponent(LS.getProductName());
							vg += '&vg[brand]=' + encodeURIComponent(LS.getProductBrand());
							vg += '&vg[category]=' + encodeURIComponent(LS.getProductCategory());
							vg += '&vg[price]=' + encodeURIComponent(LS.getProductPrice());
							vg += '&vg[price_old]=' + encodeURIComponent(LS.getProductOldPrice());
							vg += '&vg[currency_id]=' + encodeURIComponent(LS.getCurrencyId());
							vg += '&vg[is_available]=' + encodeURIComponent(LS.isProductAvailable());
							vg += '&vg[thumbnail]=' + encodeURIComponent(LS.getProductImage());
							vg += '&vg[description]=' + encodeURIComponent(LS.getProductDescription());
							vg += '&vg[product_url]=' + encodeURIComponent(LS.getProductClearUrl());

																												url_param = url_param + vg;
						}
						var allow_vc = (vnct>=2);
												if (allow_vc) {
							if (url_param != '') {
								url_param = url_param + '&';
							}
							url_param = url_param + 'sclist[]=ltc%3D1483972148%26c_name%3Drdd_RK1' + '%26c_value%3D20161110';
						}
						
						var allow_pc = is_preq_rbnt && allow_vc;
						if (url_param) {
															if (allow_pc) {
									url_param=url_param+rbnt_rt.showPC(0);
								}
								loadScript('https:\/\/rbnt.org\/rsc.php?scr=1&' + url_param,'');
						}
						return true;
					} else {
													if(rbnt_rt.ru!==''){
								loadScript('https:\/\/rbnt.org\/rsc.php?scr=1&'+'sclist[]='+encodeURIComponent('nc=0&ltc=1478788148&c_name=v_RK1&c_value=' + encodeURIComponent('ostrovok.ru/')+'&ru='+encodeURIComponent(rbnt_rt.ru)),'');
							}
											}
					

															if (LS.isOrder()) {
						rbnt_rt.order(LS.getOrderID());
						return true;
					}
					
					if (LS.isCart()) {
						if (LS.getTimer()) {
							var up = '';
							setInterval(function() {up = cart(LS, up);}, 2000);
						} else {
							cart(LS);
						}

						return true;
					}

					return false;
				}
				function cart(obj, up) {
					var c = obj.getCart();
					if (typeof c !== 'undefined' && c !== false) {
						var url_param = 'sclist[]='+encodeURIComponent('c_name=rb_RK1&c_value=');

						if (c.length > 0) {
							var pid = [];
							for (var i = 0; i < c.length; i++) {
								pid.push(c[i]['ProductId']);
							}
							url_param += encodeURIComponent(pid.join(','));
						}

						if (up != url_param) {
							up = url_param;

							
							var newItemV = document.createElement("img");
							newItemV.src = 'https:\/\/rbnt.org\/rsc.php?' + url_param;
							newItemV.id = Math.random();
							newItemV.style.width = '0px';
							newItemV.style.height = '0px';
							newItemV.style.display = 'none';
							document.body.appendChild(newItemV);
						}

						return up;
					}
				}


									if (typeof window.rbnt_rt_params == 'undefined') {
												loadScript('https://rbnt.org/js/shops/ostrovok_ru.js?d=1461260124', loadCallbackRbnt);
					}
					
			if (is_request_rbnt) {
				var url_param = 'sclist[]=ltc%3D1486564148%26c_name%3Drdata_RK1_' + '%26c_value%3D' + tmp_val;
				if (typeof window.rbnt_rt_params == 'undefined') {
										url_param = url_param + '&sclist[]=ltc%3D1478874548%26c_name%3Drd_RK1_' + '%26c_value%3D1';
				}
				var newItem = document.createElement("img");
				newItem.src = 'https:\/\/rbnt.org\/rsc.php?'+url_param;
				newItem.style.width = '0px';
				newItem.style.height = '0px';
				newItem.style.display = 'none';
				document.body.appendChild(newItem);
			}
					} catch (e) {
			var newItemV = document.createElement("img");
			newItemV.src = 'https:\/\/rbnt.org\/lw.php?t=e&h=' + window.location.hostname + '&m=' + encodeURIComponent(e.message);
			newItemV.id = Math.random();
			newItemV.style.width = '0px';
			newItemV.style.height = '0px';
			newItemV.style.display = 'none';
			document.body.appendChild(newItemV);
		}
	}, 100);
}
