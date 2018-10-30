function video_init_embed_from_url(url){

	  var ytRegExp = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
  var ytMatch = url.match(ytRegExp);
  var igRegExp = /(?:www\.|\/\/)instagram\.com\/p\/(.[a-zA-Z0-9_-]*)/;
  var igMatch = url.match(igRegExp);
  var vRegExp = /\/\/vine\.co\/v\/([a-zA-Z0-9]+)/;
  var vMatch = url.match(vRegExp);
  var vimRegExp = /\/\/(player\.)?vimeo\.com\/([a-z]*\/)*(\d+)[?]?.*/;
  var vimMatch = url.match(vimRegExp);
  var dmRegExp = /.+dailymotion.com\/(video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/;
  var dmMatch = url.match(dmRegExp);
  var youkuRegExp = /\/\/v\.youku\.com\/v_show\/id_(\w+)=*\.html/;
  var youkuMatch = url.match(youkuRegExp);
  var qqRegExp = /\/\/v\.qq\.com.*?vid=(.+)/;
  var qqMatch = url.match(qqRegExp);
  var qqRegExp2 = /\/\/v\.qq\.com\/x?\/?(page|cover).*?\/([^\/]+)\.html\??.*/;
  var qqMatch2 = url.match(qqRegExp2);
  var mp4RegExp = /^.+.(mp4|m4v)$/;
  var mp4Match = url.match(mp4RegExp);
  var oggRegExp = /^.+.(ogg|ogv)$/;
  var oggMatch = url.match(oggRegExp);
  var webmRegExp = /^.+.(webm)$/;
  var webmMatch = url.match(webmRegExp);
  var video_created;
  if (ytMatch && ytMatch[1].length === 11) {
      var youtubeId = ytMatch[1];
      video_created = $('<iframe>')
          .attr('frameborder', 0)
          .attr('src', '//www.youtube.com/embed/' + youtubeId)
          .attr('width', '640').attr('height', '360');
  }
  else if (igMatch && igMatch[0].length) {
      video_created = $('<iframe>')
          .attr('frameborder', 0)
          .attr('src', 'https://instagram.com/p/' + igMatch[1] + '/embed/')
          .attr('width', '612').attr('height', '710')
          .attr('scrolling', 'no')
          .attr('allowtransparency', 'true');
  }
  else if (vMatch && vMatch[0].length) {
      video_created = $('<iframe>')
          .attr('frameborder', 0)
          .attr('src', vMatch[0] + '/embed/simple')
          .attr('width', '600').attr('height', '600')
          .attr('class', 'vine-embed');
  }
  else if (vimMatch && vimMatch[3].length) {
      video_created = $('<iframe webkitallowfullscreen mozallowfullscreen allowfullscreen>')
          .attr('frameborder', 0)
          .attr('src', '//player.vimeo.com/video/' + vimMatch[3])
          .attr('width', '640').attr('height', '360');
  }
  else if (dmMatch && dmMatch[2].length) {
      video_created = $('<iframe>')
          .attr('frameborder', 0)
          .attr('src', '//www.dailymotion.com/embed/video/' + dmMatch[2])
          .attr('width', '640').attr('height', '360');
  }
  else if (youkuMatch && youkuMatch[1].length) {
      video_created = $('<iframe webkitallowfullscreen mozallowfullscreen allowfullscreen>')
          .attr('frameborder', 0)
          .attr('height', '498')
          .attr('width', '510')
          .attr('src', '//player.youku.com/embed/' + youkuMatch[1]);
  }
  else if ((qqMatch && qqMatch[1].length) || (qqMatch2 && qqMatch2[2].length)) {
      var vid = ((qqMatch && qqMatch[1].length) ? qqMatch[1] : qqMatch2[2]);
      video_created = $('<iframe webkitallowfullscreen mozallowfullscreen allowfullscreen>')
          .attr('frameborder', 0)
          .attr('height', '310')
          .attr('width', '500')
          .attr('src', 'http://v.qq.com/iframe/player.html?vid=' + vid + '&amp;auto=0');
  }
  else if (mp4Match || oggMatch || webmMatch) {
      video_created = $('<video controls>')
          .attr('src', url)
          .attr('width', '640').attr('height', '360');
  }
  else {
      // this is not a known video link. Now what, Cat? Now what?
      return false;
  }
  video_created.addClass('note-video-clip');
  return video_created[0];

}