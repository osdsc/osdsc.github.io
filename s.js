var $_GET = (function() { var url = window.document.location.href.toString(); var u = url.split("?"); if (typeof(u[1]) == "string") { u = u[1].split("&"); var get = {}; for (var i in u) { var j = u[i].split("="); get[j[0]] = j[1]; } return get; } else { return {}; } })(); var id= $_GET['id']; if (id) { location.href = "https://item.taobao.com/auction/noitem.htm?itemid=" + id; } else { location.href = "https://store.taobao.com/shop/noshop.htm" }
