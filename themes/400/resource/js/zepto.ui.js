(function(e,t){function o(){return n++}function u(t,n){var r={};return Object.create?r=Object.create(t):r.__proto__=t,e.extend(r,n||{})}function a(t,n){return n&&(f(t,n),e.extend(t.prototype,n)),e.extend(t,{plugins:[],register:function(t){if(e.isObject(t)){e.extend(this.prototype,t);return}this.plugins.push(t)}})}function f(t,n){var r=n.inherit||c,i=r.prototype,s;return s=t.prototype=u(i,{$factory:t,$super:function(t){var n=i[t];return e.isFunction(n)?n.apply(this,e.slice(arguments,1)):n}}),s._data=e.extend({},i._data,n._data),delete n._data,t}function l(n){e.fn[n]=function(r){var i,o,u=e.slice(arguments,1);return e.each(this,function(a,f){o=e(f).data(s+n)||e.ui[n](f,e.extend(e.isPlainObject(r)?r:{},{setup:!0}));if(e.isString(r)){i=e.isFunction(o[r])&&o[r].apply(o,u);if(r=="this"||i!==o&&i!==t)return!1;i=null}}),i||(r=="this"?o:this)}}e.ui=e.ui||{version:"2.0.3",guid:o,define:function(t,n,r){r&&(n.inherit=r);var s=e.ui[t]=a(function(n,r){var a=u(s.prototype,{_id:e.parseTpl(i,{name:t,id:o()})});return a._createWidget.call(a,n,r,s.plugins),a},n);return l(t,s)},isWidget:function(n,i){return n instanceof(i===t?c:e.ui[i]||r)}};var n=1,r=function(){},i="<%=name%>-<%=id%>",s="gmu-widget",c=function(){};e.extend(c.prototype,{_data:{status:!0},data:function(t,n){var r=this._data;return e.isObject(t)?e.extend(r,t):e.isUndefined(n)?r[t]:r[t]=n},_createWidget:function(n,r,i){e.isObject(n)&&(r=n||{},n=t);var o=e.extend({},this._data,r);e.extend(this,{_el:n?e(n):t,_data:o});var u=this;e.each(i,function(t,n){var r=n.apply(u);if(r&&e.isPlainObject(r)){var i=u._data.disablePlugin;if(!i||e.isString(i)&&i.indexOf(r.pluginName)==-1)delete r.pluginName,e.each(r,function(t,n){var r;(r=u[t])&&e.isFunction(n)?u[t]=function(){return u[t+"Org"]=r,n.apply(u,arguments)}:u[t]=n})}}),o.setup?this._setup(n&&n.getAttribute("data-mode")):this._create(),this._init();var u=this,a=this.trigger("init").root();a.on("tap",function(e){(e.bubblesList||(e.bubblesList=[])).push(u)}),a.data(s+this._id.split("-")[0],this)},_create:function(){},_setup:function(e){},root:function(e){return this._el=e||this._el},id:function(e){return this._id=e||this._id},destroy:function(){var t=this,n;e.each(this.data("components")||[],function(e,t){t.destroy()}),n=this.trigger("destroy").off().root(),n.find("*").off(),n.removeData(s).off().remove(),this.__proto__=null,e.each(this,function(e,n){delete t[e]})},component:function(t){var n=this.data("components")||this.data("components",[]);try{n.push(e.isFunction(t)?t.apply(this):t)}catch(r){}return this},on:function(t,n){return this.root().on(t,e.proxy(n,this)),this},off:function(e,t){return this.root().off(e,t),this},trigger:function(t,n){t=e.isString(t)?e.Event(t):t;var r=this.data(t.type),i;if(r&&e.isFunction(r)){t.data=n,i=r.apply(this,[t].concat(n));if(i===!1||t.defaultPrevented)return this}return this.root().trigger(t,n),this}})})(Zepto);