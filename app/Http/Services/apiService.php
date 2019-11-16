<?php


namespace App\Http\Services;


class apiService
{
    /**
     * Calculates the great-circle distance between two points, with
     * the Haversine formula.
     * @param float $latitudeFrom Latitude of start point in [deg decimal]
     * @param float $longitudeFrom Longitude of start point in [deg decimal]
     * @param float $latitudeTo Latitude of target point in [deg decimal]
     * @param float $longitudeTo Longitude of target point in [deg decimal]
     * @param float $earthRadius Mean earth radius in [m]
     * @return float Distance between points in [m] (same as earthRadius)
     */
    function haversineGreatCircleDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo) {
            $earthRadius = 6371000;//hearth radius in meter
            // convert from degrees to radians
            $latFrom = deg2rad($latitudeFrom);
            $lonFrom = deg2rad($longitudeFrom);
            $latTo = deg2rad($latitudeTo);
            $lonTo = deg2rad($longitudeTo);

            $latDelta = $latTo - $latFrom;
            $lonDelta = $lonTo - $lonFrom;

            $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                    cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
            return $angle * $earthRadius;

            /*
             * 1
                Calculate distances straight inside queries, using the following stored procedure:
                -----------------------
                CREATE FUNCTION GEODIST (lat1 DOUBLE, lon1 DOUBLE, lat2 DOUBLE, lon2 DOUBLE)
                    RETURNS DOUBLE
                    DETERMINISTIC
                        BEGIN
                            DECLARE dist DOUBLE;
                            SET dist =  round(acos(cos(radians(lat1))*cos(radians(lon1))*cos(radians(lat2))
                                        *cos(radians(lon2)) + cos(radians(lat1))*sin(radians(lon1))
                                        *cos(radians(lat2))*sin(radians(lon2)) + sin(radians(lat1))
                                        *sin(radians(lat2))) * 6378.8, 1);
                            RETURN dist;
                        END|
                ------------------------

                You just execute the above as an SQl statement from within phpMyAdmin to create the procedure.
                Just notice the ending |, so in your SQL input window, choose for the | sign as limiter.
                Then in a query, call it like this:

                $sql = "
                        SELECT `locations`.`name`, GEODIST(`locations`.`lat`, `locations`.`lon`,
                        " . $lat_to_calculate . ", " . $lon_to_calculate . ") AS `distance`
                        FROM `locations` ";

                I found this to be a lot faster than calculating it in PHP after the query has been run.
             * */
        }
    }
