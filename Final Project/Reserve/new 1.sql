SELECT
	Hotel_Room.*
FROM
	Hotel_Room
WHERE
		(Hotel_Room.Capacity+Hotel_Room.Expandable) >= '$Capacity'
	AND
		Hotel_Room.Price BETWEEN '$price_min' AND '$price_max'
	AND
		Hotel_Room.View like '$view'
	AND
		Hotel_Room.Hotel_id IN
		(
			SELECT
				Hotel.Hotel_id
			FROM
				Hotel
			WHERE
				Hotel.Stars BETWEEN '$stars_min' AND '$stars_max'
		)
	AND
		Hotel_Room.Hotel_id IN
		(
			SELECT
				Hotel.Hotel_id
			FROM 
				Hotel
			WHERE
				Hotel.City like '$City'
		)
	AND
		Hotel_Room.Hotel_id IN
		( 
			SELECT
				Hotel.Hotel_id
			FROM
				Hotel
			WHERE
				Hotel.Hotel_Group_id like '$Hotel_Group_id'
		)
	AND
		(
			Hotel_Room.Room_id NOT IN
			(
				SELECT
					Room_id
				FROM
					Reserves
				WHERE
					Reserves.Room_id = Hotel_Room.Room_id
			)
			
		OR
			Hotel_Room.Room_id IN
			( 
				SELECT
					Reserves.Room_id
				FROM 
					Reserves
				WHERE
				
				(
					Reserves.Finish_date <= '$start_date'
					OR
					Reserves.Start_date >= '$finish_date'
				)
			)

		)	
			
			
			
			
			
			
			
			
			
		