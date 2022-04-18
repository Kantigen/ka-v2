import React from 'react';
import ReactTooltip from 'react-tooltip';

import LeftSidebar from 'app/js/components/menu/leftSidebar';
import RightSidebar from 'app/js/components/menu/rightSidebar';
import Map from 'app/js/components/menu/map';
import Menu from 'app/js/components/menu';
import WindowManager from 'app/js/components/windowManager';
import MailWindow from 'app/js/components/window/mail';
import StatsWindow from 'app/js/components/window/stats';
import OptionsWindow from 'app/js/components/window/options';

//
// This React component will be the main container of everything that appears on the screen.
//

const GameWindow = () => (
    <div
        id='sidebarContainer'
        style={{
            position: 'fixed',
            top: 0,
            left: 0,
            width: '100%',
            height: '100%',
        }}
    >
        <LeftSidebar />
        <RightSidebar />

        {/* One container to rule them all... */}
        <div className='pusher'>
            {/*
                        This sets all the tooltips in the entire client.
                        See http://npmjs.org/package/react-tooltip for usage.
                    */}
            <ReactTooltip effect='solid' place='bottom' type='dark' />
            <Menu />
            <Map />
            <div id='content'></div> {/* This div is used by map. */}
            <WindowManager />
            <MailWindow />
            <StatsWindow />
            <OptionsWindow />
        </div>
    </div>
);

export default GameWindow;
