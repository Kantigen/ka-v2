'use strict';

import React from 'react';
import PropTypes from 'prop-types';

import PlanetDetailLine from 'app/js/components/window/planetPanel/line';

import constants from 'app/js/constants';
class PlanetOre extends React.Component {
    static propTypes = {
        status: PropTypes.object.isRequired,
    };

    render() {
        var ores = constants.ORES;
        var bodyOre = this.props.status.ore;

        var renderOres = [];
        for (var prop in ores) {
            if (ores.hasOwnProperty(prop)) {
                renderOres.push(
                    <PlanetDetailLine title={ores[prop]} value={bodyOre[prop]} key={ores[prop]} />
                );
            }
        }

        return (
            <div className='ui grid'>
                <div className='sixteen wide column'>{renderOres}</div>
            </div>
        );
    }
}

export default PlanetOre;
