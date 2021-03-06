import '../../../../../themes/silver/main/ts/Theme';

import { Assertions, Pipeline, Step, Logger, Log } from '@ephox/agar';
import { UnitTest } from '@ephox/bedrock';
import { TinyApis, TinyDom, TinyLoader } from '@ephox/mcagar';
import LinkPluginUtils from 'tinymce/plugins/link/core/Utils';
import LinkPlugin from 'tinymce/plugins/link/Plugin';
import { TestLinkUi } from '../module/TestLinkUi';

UnitTest.asynctest('browser.tinymce.plugins.link.ImageFigureLinkTest', (success, failure) => {

  LinkPlugin();

  TinyLoader.setup(function (editor, onSuccess, onFailure) {
    const api = TinyApis(editor);

    const sLinkTheSelection = function () {
      const insertLink = LinkPluginUtils.link(editor, {});
      return Logger.t('Link the selection', Step.sync(function () {
        insertLink({
          href: 'http://google.com'
        });
      }));
    };

    const sUnlinkSelection = function () {
      const removeLink = LinkPluginUtils.unlink(editor);
      return Logger.t('Unlink the selection', Step.sync(function () {
        removeLink();
      }));
    };

    const sAssertPresence = function (selector) {
      return Logger.t('Assert element is present',
        Assertions.sAssertPresence('Detect presence of the element', selector, TinyDom.fromDom(editor.getBody()))
      );
    };

    Pipeline.async({},
      Log.steps('TBA', 'Link: Set content, select and link the selection, assert link is present. Then select and unlink the selection, assert link is not present', [
        TestLinkUi.sClearHistory,
        api.sSetContent(
          '<figure class="image">' +
            '<img src="http://moxiecode.cachefly.net/tinymce/v9/images/logo.png" />' +
            '<figcaption>TinyMCE</figcaption>' +
          '</figure>'
        ),
        api.sSetSelection([0], 0, [0], 0),
        sLinkTheSelection(),
        sAssertPresence({ 'figure.image > a[href="http://google.com"] > img': 1 }),

        api.sSetSelection([0], 0, [0], 0),
        sUnlinkSelection(),
        sAssertPresence({ 'figure.image > img': 1 }),
        TestLinkUi.sClearHistory
      ])
    , onSuccess, onFailure);
  }, {
    plugins: 'link',
    toolbar: 'link',
    theme: 'silver',
    base_url: '/project/js/tinymce',
  }, success, failure);
});
