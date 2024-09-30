        <aside id="investor-list" class="col-sm-12 col-md-3 hidden-xs hidden-sm">
          <ul>
            <li class="<?= @$investor=='governance' ? 'act' : ''; ?>">
              <i class="fa fa-angle-right main-color"></i><a href="/governance/"> 公司治理</a>
              <ol class="disc">
                <li>
                  <a href="#公司治理"> 公司治理</a>
                </li>
                <li>
                  <a href="#公司辦法"> 公司辦法</a>
                </li>
                <li>
                  <a href="#前十大股東名單"> 前十大股東名單</a>
                </li>
                <li>
                  <a href="#反貪腐"> 反貪腐賄賂教育訓練</a>
                </li>
              </ol>
            </li>
            <li class="<?= @$investor=='service' ? 'act' : ''; ?>">
              <i class="fa fa-angle-right main-color"></i><a href="/investor-service/"> 股東服務</a>
              <ol class="disc">
                <li>
                  <a href="#股價資訊"> 股價資訊</a>
                </li>
                <li>
                  <a href="#股務代理"> 股務代理</a>
                </li>
                <li>
                  <a href="#投資人聯絡窗口"> 投資人聯絡窗口</a>
                </li>
              </ol>
            </li>
            <li class="<?= @$investor=='events' ? 'act' : ''; ?>">
              <i class="fa fa-angle-right main-color"></i><a href="/investor-events/"> 重大訊息</a>
            </li>
            <li class="<?= @$investor=='revenue' ? 'act' : ''; ?>">
              <i class="fa fa-angle-right main-color"></i><a href="/investor-revenue/"> 營收報告</a>
            </li>
            <li class="<?= @$investor=='financial' ? 'act' : ''; ?>">
              <i class="fa fa-angle-right main-color"></i><a href="/investor-financial/"> 財務報表</a>
              <ol class="disc">
                <li>
                  <a href="#IFRSs"> 採 IFRSs 後財務報表</a>
                </li>
                <li>
                  <a href="#noIFRSs"> 採 IFRSs 前財務報表</a>
                </li>
              </ol>
            </li>
            <li class="<?= @$investor=='report' ? 'act' : ''; ?>">
              <i class="fa fa-angle-right main-color"></i><a href="/investor-report/"> 股東會資訊</a>
            </li>
          </ul>
        </aside>